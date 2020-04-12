<?php
function sendMessage($name, $email, $phone, $body, $ip){
    
    $pdo = Database::getInstance()->getConnection();

    // check user existance... do we add new user or update existing user?
     $check_email_query = 'SELECT COUNT(email) AS num FROM tbl_user WHERE email = :email'; 
     $user_set = $pdo->prepare($check_email_query);
     $user_set->execute(
         array(
             ':email'=>$email
         )
     );
 
      $row = $user_set->fetch(PDO::FETCH_ASSOC);

      //formating phone number
        // Allow only Digits, remove all other characters.
        $number = preg_replace("/[^\d]/","",$phone);
        // get number length.
        $length = strlen($number);
        // if number = 10
        if($length == 10) {
            $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $phone);
        }    
        $phone = $number;
        
        

    
        //phpmailer config
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure='ssl';
        $mail->Port = 465;
        $mail->SMTPAuth=true;

        $mail->Username='faragmalek14@gmail.com'; // add company email
        $mail->Password='Malooky14'; // please dont steal my password. I really dont want to change it

        $mail->addAddress('faragmalek14@gmail.com');
        $mail->setFrom('faragmalek14@gmail.com');
        

        $mail->isHTML(true);
        $mail->Subject="Message From $name | HIV AIDS Connection MicroSite"; 
        $mail->Body="

        The following message was sent from $name<br><br>
        Email: $email<br>
        Phone number: $phone<br><br><br>

        $body.
        


        <br><br><br>
        ";

        if(!$mail->send()){
            $message= $mail->ErrorInfo;
            return 'Email ran into an error... Please try again.';
        }else{
            // check user existance... do we add new user or update existing user?
            if($row['num'] > 0){
                $create_customer_query = "UPDATE tbl_customers SET email= :email, phone= :phone, ip= :ip;";
            }else{
                $create_customer_query = "INSERT INTO tbl_customers (id, name, email, phone, ip) VALUES (NULL, :name, :email, :phone, :ip);";
            }
            

            $customer_signup = $pdo->prepare($create_customer_query);
            $customer_signup->execute(
                array(
                    ':name'=>$name,
                    ':email'=>$email,
                    ':phone'=>$phone,
                    ':ip'=>$ip
                )
            );
            
            header('Location: sent.php');
        }
}

function newsletterSignup($name, $email, $phone, $ip){
    
    $pdo = Database::getInstance()->getConnection();

    // check user existance... do we add new user or update existing user?
     $check_email_query = 'SELECT COUNT(email) AS num FROM tbl_customers WHERE email = :email'; 
     $user_set = $pdo->prepare($check_email_query);
     $user_set->execute(
         array(
             ':email'=>$email
         )
     );
 
      $row = $user_set->fetch(PDO::FETCH_ASSOC);

      //formating phone number
        // Allow only Digits, remove all other characters.
        $number = preg_replace("/[^\d]/","",$phone);
        // get number length.
        $length = strlen($number);
        // if number = 10
        if($length == 10) {
            $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $phone);
        }    
        $phone = $number;
        
        

    
        //phpmailer config
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure='ssl';
        $mail->Port = 465;
        $mail->SMTPAuth=true;

        $mail->Username='faragmalek14@gmail.com'; // add company email
        $mail->Password='Malooky14'; // please dont steal my password. I really dont want to change it

        $mail->addAddress($email);
        $mail->setFrom('faragmalek14@gmail.com');
        

        $mail->isHTML(true);
        $mail->Subject="Thank You For Signing Up For Our Newsletter! | HIV AIDS Connection MicroSite"; 
        $mail->Body="

        Thank you, $name for signing up with our newsletter!<br>

        Here at HIV AIDS Connection, we appreciate your interest and support in making a difference!<br><br>
        Sincerely, the HIV AIDS Connection Team :)

        <br><br><br>
        ";

        if(!$mail->send()){
            $message= $mail->ErrorInfo;
            return 'Email ran into an error... Please try again.';
        }else{
            // check user existance... do we add new user or update existing user?
            if($row['num'] > 0){
                $create_customer_query = "UPDATE tbl_customers SET email= :email, phone= :phone, ip= :ip;";
            }else{
                $create_customer_query = "INSERT INTO tbl_customers (id, name, email, phone, ip) VALUES (NULL, :name, :email, :phone, :ip);";
            }
            

            $customer_signup = $pdo->prepare($create_customer_query);
            $customer_signup->execute(
                array(
                    ':name'=>$name,
                    ':email'=>$email,
                    ':phone'=>$phone,
                    ':ip'=>$ip
                )
            );
            
            header('Location: thankyou.php');
        }
}

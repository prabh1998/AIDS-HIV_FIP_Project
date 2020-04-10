<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;




function signUp($firstName, $lastName, $password, $email, $country, $date){
    

    $pdo = Database::getInstance()->getConnection();
    $message_signUp = '';
    //timezone config
    date_default_timezone_set('America/Toronto');
    $date = date('Y-m-d H:i:s');

    // check user exist or not
    $check_email_query = 'SELECT COUNT(user_email) AS num FROM tbl_user WHERE user_email = :email'; 
    $user_set = $pdo->prepare($check_email_query);
    $user_set->execute(
        array(
            ':email'=>$email
        )
    );

    $row = $user_set->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0){
        $message_signUp = 'email is already registered';
    }else{
        //phpmailer config
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure='ssl';
        $mail->Port = 465;
        $mail->SMTPAuth=true;

        $mail->Username='prabhjotkaur7449@gmail.com';
        $mail->Password='Golgappa1@'; // please dont steal my password. I really dont want to change it

        

        $mail->addAddress($email);
        $mail->setFrom('prabhjotkaur7449@gmail.com');
        
        
        
        $hash = md5(rand(0,1000)); //random numbers for secure link and validation

        $mail->isHTML(true);
        $mail->Subject='Hiv and Aids Campaign | Verification'; 
        $mail->Body='
        Hello from the Team <br><br>
        Thanks for signing up!<br><br>
        Your account for Hiv and Aids campaign has been Created!
        <br><br><br>
        ------------------------<br>
        Here are your login credentials!<br>
        Email: '.$email.'<br>
        Password: '.$password.'<br>
        ------------------------<br>
        <br><br><br>
        ';

        if(!$mail->send()){
            $message_signUp= $mail->ErrorInfo;
        }else{
            $message_signUp = 'Your account is setup, proceed to login :)';
            //inserting user data into database
                $user_insert_query = "INSERT INTO `tbl_user` (`user_id`, `first_name`, `last_name`, `user_email`, `user_password`, `hash`, `user_country`, `start_date`, `last_updated`, `verified`) VALUES (NULL, :fname, :lname, :email, :pword, :hash, :country, :date, :date, '0');";
                 $user_sign = $pdo->prepare($user_insert_query);
                $user_sign->execute(
                    array(
                        ':fname'=>$firstName,
                        ':lname'=>$lastName,
                        ':email'=>$email,
                        ':pword'=>$password,
                        ':hash'=>$hash,
                        ':country'=>$country,
                        ':date'=>$date
                    )
                );
            }  
    }
    return $message_signUp;
}
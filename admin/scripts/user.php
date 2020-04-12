<?php


function createuser($username, $name, $email, $password, $ip){
    
    $pdo = Database::getInstance()->getConnection();

     // check user existance
     $check_email_query = 'SELECT COUNT(username) AS num FROM tbl_admins WHERE username = :username'; 
     $user_set = $pdo->prepare($check_email_query);
     $user_set->execute(
         array(
             ':username'=>$username
         )
     );
 
     $row = $user_set->fetch(PDO::FETCH_ASSOC);

     if($row['num'] > 0){
        $message = 'username is already registered';
    }else{

        //phpmailer config
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure='ssl';
        $mail->Port = 465;
        $mail->SMTPAuth=true;

        $mail->Username='faragmalek14@gmail.com';
        $mail->Password='Malooky14'; // please dont steal my password. I really dont want to change it

        $mail->addAddress($email);
        $mail->setFrom('faragmalek14@gmail.com');
        

        $mail->isHTML(true);
        $mail->Subject='Created Admin Account | HIV AIDS Connection'; 
        $mail->Body='
        <br>

        Thanks for signing up!<br><br>
        Your admin account has been Created!
        <br><br><br>
        ------------------------<br>
        Here are your login credentials!<br>
        Email: '.$username.'<br>
        Password: '.$password.'<br><br>

        Login at domainName.com/admin/login.php <br>
        ------------------------<br>
        <br><br><br>
        Thanks again!<br>
        - The HIV AIDS Connection Team<br><br>
        ';

        if(!$mail->send()){
            $message= $mail->ErrorInfo;
            return 'user creation did not got through';
        }else{
            //encrypt passowrd
            $passEncryp = md5($password);

            //creating user sql query from form details
            $create_user_query = "INSERT INTO tbl_admins (id, username, name, email, password, ip) VALUES (NULL, :username, :name, :email, :password, :ip);";

            $user_signup = $pdo->prepare($create_user_query);
            $user_signup->execute(
                array(
                    ':name'=>$name,
                    ':username'=>$username,
                    ':email'=>$email,
                    ':password'=>$passEncryp,
                    ':ip'=>$ip
                )
            );
            
            redirect_to('index.php');
        }
    }
}

function getSingleUser($id){
    $pdo = Database::getInstance()->getConnection();
    //TODO: execute the proper SQL query to fetch the user data whose user_id = $id
    $get_user_query = 'SELECT * FROM tbl_admins WHERE id = :id';
    $get_user_set = $pdo->prepare($get_user_query);
    $get_user_result = $get_user_set->execute(
        array(
            ':id'=>$id
        )
    );

    //TODO: if the execution is successful, return the user data
    // Otherwise, return an error message
    if($get_user_result){
        return $get_user_set;
    }else{
        return 'There was a problem accessing the user';
    }
}

function editUser($id, $name, $username, $password, $email){

    //TODO: set up database connection
    $pdo = Database::getInstance()->getConnection();

    $passEncryp = md5($password);

    //TODO: Run the proper SQL query to update tbl_user with proper values
    $update_user_query = 'UPDATE tbl_admins SET name = :name, username = :username, password=:password, email =:email WHERE id = :id';
    $update_user_set = $pdo->prepare($update_user_query);
    $update_user_result = $update_user_set->execute(
        array(
            ':name'=>$name,
            ':username'=>$username,
            ':password'=>$passEncryp,
            ':email'=>$email,
            ':id'=>$id
        )
    );

    if($update_user_result){
        redirect_to('index.php');
    }else{
        return 'Guess you got canned...';
    }
}

function editUser2($id, $name, $username, $email){

    //TODO: set up database connection
    $pdo = Database::getInstance()->getConnection();


    //TODO: Run the proper SQL query to update tbl_user with proper values
    $update_user_query = 'UPDATE tbl_admins SET name = :name, username = :username, email =:email WHERE id = :id';
    $update_user_set = $pdo->prepare($update_user_query);
    $update_user_result = $update_user_set->execute(
        array(
            ':name'=>$name,
            ':username'=>$username,
            ':email'=>$email,
            ':id'=>$id
        )
    );

    if($update_user_result){
        redirect_to('index.php');
    }else{
        return 'Guess you got canned...';
    }
}

function deleteuser($id){
    $pdo = Database::getInstance()->getConnection();
    //TODO: execute the proper SQL query to fetch the user data whose user_id = $id
    $delete_user_query = 'DELETE FROM tbl_admins WHERE id = :id';
    $delete_user_set = $pdo->prepare($delete_user_query);
    $delete_user_result = $delete_user_set->execute(
        array(
            ':id'=>$id
        )
    );

    if($delete_user_result){
        redirect_to('index.php');
    }else{
        return 'There was a problem accessing the user';
    }
}



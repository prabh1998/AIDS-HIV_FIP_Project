<?php 

function login($email, $password){
    
// Login with the email and password you filled during sign-up
    $pdo = Database::getInstance()->getConnection();
    $message_login = '';
    //timezone config
    date_default_timezone_set('America/Toronto');

    // check user existance
    $check_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_email= :email'; 
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute(
        array(
            ':email'=>$email
        )
    );


    if($user_set->fetchColumn()>0){
        //user exists
        $get_user_query = 'SELECT * FROM tbl_user WHERE user_email = :email AND user_password = :password';
        $user_check = $pdo->prepare($get_user_query);
        $user_check->execute(
            array(
                ':email'=>$email,
                ':password'=>$password
            )
        );

    while($found_user = $user_check->fetch(PDO::FETCH_ASSOC)){
        $id = $found_user['user_id'];
        $hash = $found_user['hash'];
        $date = date('Y-m-d H:i:s');

        // login successfully done
        $message_login = 'Login Successful!';
        // updating database
        $update_query = 'UPDATE tbl_user SET last_updated = :date WHERE user_id = :id';
        $update_set = $pdo->prepare($update_query);
        $update_set->execute(
            array(
                ':date'=>$date,
                ':id'=>$id
            )
        );
    }

    if(isset($id)){
        redirect_to("../index.php?email=$email hash=$hash");
    }

    }else{
        //user doesn't exit
        $message_login = 'user doesnot exist';
    }

    return $message_login;
}
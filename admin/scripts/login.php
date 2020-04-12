<?php 

function login($username, $password, $ip){
    //Debug
    // $message = sprintf('You are trying to login with username %s and password %s', $username, $password);

    $pdo = Database::getInstance()->getConnection();

    // check user existance
    $check_exist_query = 'SELECT COUNT(*) FROM tbl_admins WHERE username= :username'; // sanitation
    $user_set = $pdo->prepare($check_exist_query);
    $user_set->execute( // sanitation pt2
        array(
            ':username' => $username,
        )
    );

    if($user_set->fetchColumn()>0){
        //encrypt password
        $passEncryp = md5($password);

        //user exist
        $get_user_query = 'SELECT * FROM tbl_admins WHERE username = :username AND password = :password';
        $user_check = $pdo->prepare($get_user_query);
        $user_check->execute(
            array(
                ':username'=>$username,
                ':password'=>$passEncryp
            )
        );
    while($found_user = $user_check->fetch(PDO::FETCH_ASSOC)){
        $id = $found_user['id'];

        // login successful
        $message = 'logged in successfully!';
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $found_user['name'];
        // updating database
        $update_query = 'UPDATE tbl_admins SET ip = :ip WHERE id = :id';
        $update_set = $pdo->prepare($update_query);
        $update_set->execute(
                array(
                    ':ip'=>$ip,
                    ':id'=>$id
                )

        );
    }

    if(isset($id)){
        redirect_to('index.php');
    }

    }else{
        //user doesn't exit
        return 'user doesnt exist';
    }
}

function confirm_logged_in(){
    if(!isset($_SESSION['id'])){
        redirect_to('admin_login.php');
    }
}

function logout(){
    session_destroy();
    redirect_to('admin_login.php');
}
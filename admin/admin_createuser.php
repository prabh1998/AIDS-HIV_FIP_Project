<?php 
require_once '../load.php';
confirm_logged_in();
$ip = $_SERVER['REMOTE_ADDR'];

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

    if(empty($username) || empty($username) || empty($name) || empty($email) || empty($password)){
        $message = 'please fill require fields';
    }else{
        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
        }else{
            echo 'Creating user...';
            $message = createuser($username, $name, $email, $password, $ip);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Create User</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="header">
        <div class="white">
            <a href="#content"><img src="../images/logo.png" alt="Logo" class="mainLogo"></a>
            <div class="burger">
                <div class="bLine"></div>
                <div class="bLine"></div>
                <div class="bLine"></div>
            </div>

        </div>
        

        <nav class="mainNav">
            <ul class="navList">
                <a href="index.php"><li class="navItem">Home</li></a>
                <a href="admin_createpost"><li class="navItem">Write Post</li></a>
                <a href="admin_createuser.php"><li class="navItem">Create Account</li></a>
                <a href="admin_logout.php"><li class="navItem">Logout</li></a>
                <a href="../index.php"><li class="navItem">Main Site</li></a>
            </ul>
        </nav>
    </header>
<main class="adminArea">
    <h2>Create User</h2>

    <?php echo !empty($message)? $message: ''; ?>
    <form action="admin_createuser.php" method="post">
        <label for="">Name</label><br>
        <input type="text" name='name' value=''><br><br>
        <label for="">Username</label><br>
        <input type="text" name='username' value=''><br><br>
        <label for="">Password</label><br>
        <input type="text" name='password' value=''><br><br>
        <label for="">Email</label><br>
        <input type="email" name='email' value=''><br><br>

        <button name="submit">Create User</button>
    </form>

</main>

<script src="../js/main.js"></script>
</body>
</html>
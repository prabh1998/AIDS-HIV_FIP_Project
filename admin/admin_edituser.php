<?php 
require_once '../load.php';
confirm_logged_in();

    $id = $_SESSION['id'];
    $user = getSingleUser($id);


    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);

        if(empty($password)){
            editUser2($id, $name, $username, $email);
        }else{
            editUser($id, $name, $username, $password, $email);
        }
    }

    if(isset($_POST['delete'])){
        deleteuser($id);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Users</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
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

    <main class="adminArea editUserPage">


    <h2>Edit User</h2>
    <?php echo !empty($message)? $message : '';?>
    <form action="admin_edituser.php" method="post">
        <?php while($info = $user->fetch(PDO::FETCH_ASSOC)): ?>
            <label>Name:</label><br>
            <input type="text" name="name" value="<?php echo $info['name'];?>"><br><br>

            <label>Username:</label><br>
            <input type="text" name="username" value="<?php echo $info['username'];?>"><br><br>

            <label>Password: (leave blank to keep current password)</label><br>
            <input type="text" name="password" value=""><br><br>

            <label>Email:</label><br>
            <input type="text" name="email" value="<?php echo $info['email'];?>"><br><br>
        <?php endwhile;?>
        <button type="submit" name="submit">Edit User</button><br>
        <button type="submit" name="delete">DELETE USER</button>
    </form>

    </main>



    <script src="../js/main.js"></script>
</body>
</html>
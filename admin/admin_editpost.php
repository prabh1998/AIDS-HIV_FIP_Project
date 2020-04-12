<?php 
require_once '../load.php';

confirm_logged_in();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $previewPosts = getPost($id);
}


if(isset($_POST['submit'])){
    $author = trim($_POST['author']);
    $title = trim($_POST['title']);
    $sub_title = trim($_POST['sub_title']);
    $text = trim($_POST['text']);
    $date = trim($_POST['date']);
    $id = trim($_POST['id']);
    

    editPost($id, $author, $title, $sub_title, $text, $date);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Edit Post</title>
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
        <h2>Edit Post</h2>
        <?php echo !empty($message)? $message : '';?>
        <form action="admin_editpost.php" method="post" class='editPost'>
        <?php while ($row = $previewPosts->fetch(PDO::FETCH_ASSOC)): ?>
            <input class='invisible' type="text" name='id' value="<?php echo $row['id']; ?>">

            <label for="">Title</label>
            <input type="text" name='title' value="<?php echo $row['title']; ?>">

            <label for="">Sub Title</label>
            <input type="text" name='sub_title' value="<?php echo $row['sub_title']; ?>">

            <label for="">Author</label>
            <input type="text" name='author' value="<?php echo $row['author']; ?>">

            <label for="">Date</label>
            <input type="text" name='date' value="<?php echo $row['date']; ?>">

            <label for="">Text</label>
            <textarea name="text"><?php echo $row['text']; ?></textarea>
        <?php endwhile; ?>

        <button name='submit'>Edit Post</button>
        </form>
    </main>

    
    



    <script src="../js/main.js"></script>
</body>
</html>
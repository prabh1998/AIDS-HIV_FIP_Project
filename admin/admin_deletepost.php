<?php 
require_once '../load.php';

confirm_logged_in();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $previewPosts = getPost($id);
}


if(isset($_POST['submit'])){
    $id = trim($_POST['id']);
    deletePost($id);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Delete Post</title>
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

    <h2>Delete Post</h2>
    <?php echo !empty($message)? $message : '';?>
    <form action="admin_deletepost.php" method="post">
    <?php while ($row = $previewPosts->fetch(PDO::FETCH_ASSOC)): ?>
        <input class='invisible' type="text" name='id' value="<?php echo $row['id']; ?>">
        <div class="blog">
            <div class="blogPost">
                <h4 class='title'><?php echo $row['title']; ?></h4>
                <h5 class='subTitle'><?php echo $row['sub_title']; ?></h5>
                <h6 class='author'><?php echo $row['author']; ?></h6>
                <p class='date'><?php echo $row['date']; ?></p>
                <img src="../images/<?php echo $row['image']; ?>" alt="image">
                <p class='text'><?php echo $row['text']; ?></p>
                <a href="admin_editpost.php?id=<?php echo $row['id']; ?>">Edit Post</a>
            </div>
        </div>
    <?php endwhile; ?>

    <button name='submit'>Delete Post</button>
    </form>
    



    <script src="../js/main.js"></script>
</body>
</html>
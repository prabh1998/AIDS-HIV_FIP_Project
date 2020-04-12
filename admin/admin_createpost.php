<?php 
    require_once '../load.php';
    confirm_logged_in();

    if(isset($_POST['submit'])){
        $post = array(
            'author'=>$_POST['author'],
            'title'=>$_POST['title'],
            'sub_title'=>$_POST['sub_title'],
            'text'=>$_POST['text'],
            'date'=>$_POST['date'],
            'image'=>$_FILES['image']
        );
            $message = createpost($post);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Create Post</title>
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


<main class="adminArea createPostPage">
    <h2>Create Blog Post</h2>
    <?php echo !empty($message)? $message: ''; ?>
        <form action="admin_createpost.php" method="post" enctype='multipart/form-data'>
            <label for="author">Author:</label>
            <input type="author" name="author" id="author" value="">

            <label for="date">Date:</label>
            <input type="text" name="date" id="date" value="">

            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="">

            <label for="sub_title">Sub Title:</label>
            <input type="sub_title" name="sub_title" id="sub_title" value="">

            <label for="text">text:</label>
           
            <textarea type="text" name="text" id="text" value=""></textarea>

            <label for="image">Image Upload</label>
            <input type="file" name="image" id="image">

            
            <button name="submit">Submit</button>

        </form>
</main>

    <script src="../js/main.js"></script>
</body>
</html>
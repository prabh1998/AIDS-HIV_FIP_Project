<?php 

function createpost($post){

    try{
        $pdo = Database::getInstance()->getConnection();

        //prepare image upload
            $image = $post['image'];
            $upload_file = pathinfo($image['name']);
            $accepted_types = array('gif', 'jpg', 'jpe', 'png', 'jpeg', 'webp');
            if(!in_array($upload_file['extension'], $accepted_types)){
                throw new Exception('Wrong file type...');
            }

            $image_path = '../images/';
            
            //changing file name
            $generated_name = md5($upload_file['filename'].time());
            $generated_filename = $generated_name.'.'.$upload_file['extension'];
            $targetPath = $image_path.$generated_filename;

            
            if(!move_uploaded_file($image['tmp_name'], $targetPath)){
                throw new Exception('failed to move uploaded file, check permissions');
            }
                $create_post_query = "INSERT INTO tbl_content (id, author, title, sub_title, text, date, image) VALUES (NULL, :author, :title, :sub_title, :text, :date, :image);";
                $post_check = $pdo->prepare($create_post_query);
                $post_check->execute(
                    array(
                        ':author'=>$post['author'],
                        ':title'=>$post['title'],
                        ':sub_title'=>$post['sub_title'],
                        ':text'=>$post['text'],
                        ':date'=>$post['date'],
                        ':image'=>$generated_filename
                    )
                );
                $message = 'This post has been published!';


    }catch(Exception $e){
        $error = $e->getMessage();
        return $error;
    }  
}

function getAllPosts(){
    $pdo = Database::getInstance()->getConnection();

    $get_post_query = 'SELECT * FROM tbl_content ORDER BY id DESC';
    $res = $pdo->query($get_post_query);

    if($res){
        return $res;
    }else{
        return 'There was an error accessing this info';
    }
}

function previewPosts(){
    $pdo = Database::getInstance()->getConnection();

    $preview_post_query = 'SELECT * FROM tbl_content ORDER BY id DESC LIMIT 3';
    $res = $pdo->query($preview_post_query);

    if($res){
        return $res;
    }else{
        return 'There was an error accessing this info';
    }
}

function getPost($id){
    $pdo = Database::getInstance()->getConnection();

    $get_post_query = "SELECT * FROM tbl_content WHERE id = $id";
    $res = $pdo->query($get_post_query);

    if($res){
        return $res;
    }else{
        return 'There was an error accessing this info';
    }
}

function editPost($id, $author, $title, $sub_title, $text, $date){
    $pdo = Database::getInstance()->getConnection();


    //sql query not going through
    $edit_post_query = 'UPDATE tbl_content SET author = :author, title = :title, sub_title = :sub_title, text = :text, date = :date WHERE id = :id';
    $edit_post_set = $pdo->prepare($edit_post_query);
    $edit_post_res = $edit_post_set->execute(
        array(
            ':author'=>$author,
            ':title'=>$title,
            ':sub_title'=>$sub_title,
            ':text'=>$text,
            ':date'=>$date,
            ':id'=>$id
        )
    );

    if($edit_post_res){
        redirect_to('index.php');
    }else{
        $message = 'There was an error updating this post...';
    }
}

function deletePost($id){
    $pdo = Database::getInstance()->getConnection();

    $delete_post_query = "DELETE FROM tbl_content WHERE id = $id";
    $delete_post_set = $pdo->prepare($delete_post_query);
    $delete_post_res = $delete_post_set->execute();

    if($delete_post_res){
        redirect_to('index.php');
    }else{
        $message = 'There was an error updating this post...';
    }
}
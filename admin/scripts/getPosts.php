<?php

function getPosts(){

    $pdo = Database::getInstance()->getConnection();


    $query = 'SELECT * FROM tbl_content GROUP BY id';

    $blogGet = $pdo->prepare($query);
    $blogGet->execute();

    return $blogGet;
}
<?php
    include_once '../Model/Database.php';

    $post = new db_connection();

    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $name = $_POST['name'];
        $location = $_POST['location'];

        $post->post_university($name,$location);
        header("Location:../");

    }
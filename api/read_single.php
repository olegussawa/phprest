<?php
//echo "<pre>";
header('Access-Control-Allow-Origin: *');
header('Content-type:application/json');



//инициализируем апи
include_once("../core/initialize.php");



$post =new Post($dbh);

//isset($_GET['id']) ? $post->id=$_GET['id'];$post->read_single():false;


    if(isset($_GET['id'])){

        $post->id=$_GET['id'];
        $art=$post->read_single();

        if(isset($art)){echo json_encode($art);}else
        echo 'нет записи';
    
        }else
    echo 'input get';





//выводим одну запись
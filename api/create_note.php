<?php
//echo "<pre>";
header('Access-Control-Allow-Origin: *');
header('Content-type:application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-headers: Access-Control-Allow-Origin,Content-type,Access-Control-Allow-Methods,Authorization');


//инициализируем апи
include_once("../core/initialize.php");



$post =new Post($dbh);

//$data=json_decode(file_get_contents(""));

//var_dump($_POST);


$post->name=$_POST['name'];
$post->price=$_POST['price'];
$post->number=$_POST['number'];

if($post->create_note()){
    echo 'post created';
}else
echo 'post not created';
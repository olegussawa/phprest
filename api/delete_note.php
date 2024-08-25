<?php
//echo "<pre>";
header('Access-Control-Allow-Origin: *');
header('Content-type:application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-headers: Access-Control-Allow-Origin,Content-type,Access-Control-Allow-Methods,Authorization');


//инициализируем апи
include_once("../core/initialize.php");



$post =new Post($dbh);

$data=json_decode(file_get_contents("php://input"));

//var_dump($_POST);


$post->id=$data->id;


if($post->delete_note()){
    echo 'post deleted';
}else
echo 'post not deleted';


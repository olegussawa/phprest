<?php
//echo "<pre>";
header('Access-Control-Allow-Origin: *');
header('Content-type:application/json');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-headers: Access-Control-Allow-Origin,Content-type,Access-Control-Allow-Methods,Authorization');


//инициализируем апи
include_once("../core/initialize.php");



$post =new Git($dbh);

$data=json_decode(file_get_contents("php://input"));

//var_dump($data);


$post->name=$data->функция;
$post->description=$data->описание;
$post->example=$data->пример;
$post->id=$data->id;


if($post->update_note()){
    echo 'post updated';
}else
echo 'post not updated';
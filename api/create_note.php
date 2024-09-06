<?php
//echo "<pre>";
// header('Access-Control-Allow-Origin: *');
// header('Content-type:application/json');
// header('Access-Control-Allow-Methods: POST');
// header('Access-Control-Allow-headers: Access-Control-Allow-Origin,Content-type,Access-Control-Allow-Methods,Authorization');


//инициализируем апи
include_once("../core/initialize.php");
//komment


$post =new Git($dbh);

$data=json_decode(file_get_contents("php://input"));



$post->name=$data->функция;
$post->description=$data->описание;
$post->example=$data->пример;


if($post->create_note()){
    echo 'post created';
}else
echo 'post not created';


// {
//     "name": "tea",
//     "number": 7,
//     "price": 124,
//     "id": 1
// }




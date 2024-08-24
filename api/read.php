<?php
//echo "<pre>";
header('Access-Control-Allow-Origin: *');
header('Content-type:application/json');



//инициализируем апи
include_once("../core/initialize.php");



$post =new Post($dbh);

//выводим все записи
$result=$post->read();
$arr = $result->fetchAll(PDO::FETCH_ASSOC);
$art['data']=$arr;


echo json_encode($art);























?>
<?php

$db_user='root';
$db_pass='root';
$db_name='php';


try {
	$dbh = new PDO("mysql:dbname=$db_name;host=localhost", $db_user, $db_pass);
    
} catch (PDOException $e) {
	die($e->getMessage());
    
}
//set some db attributes

$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



define('APP_NAME','PHP REST API TUTORIAL');




?>











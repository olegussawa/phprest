<?php

$db_user='root';
$db_pass='root';
$db_name='phprest';

$dbh = new PDO("mysql:dbname=$db_name;host=localhost", $db_user, $db_pass);

//set some db attributes

$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



define('APP_NAME','PHP REST API TUTORIAL');




?>











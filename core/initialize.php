<?
echo "<pre>";
defined('DS') ? null:define('DS',DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null:define('SITE_ROOT',$_SERVER['DOCUMENT_ROOT'].DS.'phprest'.DS);

defined('INC_PATH') ? null:define('INC_PATH', SITE_ROOT.'includes');
defined('CORE_PATH') ? null:define('CORE_PATH', SITE_ROOT.'core');


//всегда возвращает путь до корня сайта
//echo $_SERVER['DOCUMENT_ROOT'];



require_once  INC_PATH.'/config.php';


//core classes

require_once CORE_PATH.'/post.php';
require_once CORE_PATH.'/git.php';



?>
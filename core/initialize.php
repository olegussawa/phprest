<?

defined('DS') ? null:define('DS',DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null:define('SITE_ROOT','http://localhost/phprest/');

defined('INC_PATH') ? null:define('INC_PATH', SITE_ROOT.'includes');
defined('CORE_PATH') ? null:define('CORE_PATH', SITE_ROOT.'core');





//load the config class firs

require_once INC_PATH.'config.php';


//core classes

require_once CORE_PATH.'post.php';






?>
<?php
//$path1 = '/home/mjohns07/zend-mvc-store/library/SF/' ;
//$path2 = '/home/mjohns07/zend-mvc-store/library/SF/Plugin' ;
//$path3 = /home/mjohns07/zend-mvc-store/library/SF/Model/Resource/Db/Table/Row/' ;
//set_include_path(get_include_path() . PATH_SEPARATOR . $path1 . PATH_SEPARATOR . $path2 . PATH_SEPARATOR . $path3) ;
$paths = array(
get_include_path(),
dirname(__FILE__) . '../library'
);
set_include_path(implode(PATH_SEPARATOR, $paths));
defined('APPLICATION_PATH')
or define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));
defined('APPLICATION_ENV')
or define('APPLICATION_ENV', 'production');
require_once 'Zend/Application.php';
$application = new Zend_Application(
APPLICATION_ENV,
APPLICATION_PATH.'/config/store.ini'
);
$application->bootstrap();
$application->run();

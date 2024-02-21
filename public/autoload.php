<?php
define('DS',DIRECTORY_SEPARATOR);//fix  error routing files / , \
define('ROOT_PATH',dirname(__DIR__).DS);
define('APP',ROOT_PATH.'app'.DS);
define('CORE',APP.'Core'.DS);
define('CONFIG',APP.'Config'.DS);
define('CONTROLLERS',APP.'Controllers'.DS);
define('MODELS',APP.'Models'.DS);
define('VIEWS',APP.'Views'.DS);
define('UPLOADS',APP.ROOT_PATH.'public'.DS.'Uploads'.DS);
/*
 autoloading  all classes
firstly loading all  classes 
secondly Bring me the class you created the instance using spl autoload
*/

$modules=[ROOT_PATH,APP,CORE,CONFIG,CONTROLLERS,MODELS,VIEWS,UPLOADS];
set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');
new App()




?>
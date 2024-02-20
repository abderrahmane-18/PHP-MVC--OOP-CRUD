<?php 
/*
fron end controller
 */
class App {

    protected $controller="HomeController";
    protected $action="index";
    protected $paramas=[];
    public function __construct(){
        if (array_key_exists('QUERY_STRING', $_SERVER)) {
            $uri = $_SERVER['QUERY_STRING'];
        } else {
            $uri = '';
        }
        echo $_SERVER['QUERY_STRING'];
    }
}

?>
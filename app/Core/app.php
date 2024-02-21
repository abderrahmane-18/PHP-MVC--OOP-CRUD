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
            $url = $_SERVER['QUERY_STRING'];
        } else {
            $url = '';
        }
    //    echo $_SERVER['QUERY_STRING'];
        $url= explode("/",$url);
        echo '<br>';
        var_dump(  $url);
        echo '<br>';
        echo $url[0];

    }
  
}

?>
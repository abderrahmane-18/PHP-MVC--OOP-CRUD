<?php 
/*
fron end controller
 */
class App {

    protected $controller="HomeController";
    protected $action="index";
    protected $paramas=[];
    public function __construct(){
    $this->perpareURL();
    $this->render();

    }
    public function perpareURL()
    {
 //   $url = $_SERVER['QUERY_STRING'];

 if (array_key_exists('QUERY_STRING', $_SERVER)) {
    $url = $_SERVER['QUERY_STRING'];
    $url=trim($url,"/");
    $url= explode("/",$url);
    if(isset($url[0])){
    $this->controller=  ucwords($url[0])."Controller";
    echo '<br>';
    echo $url[0];
    echo '-------';
    echo '<br>';
    }
else {
$this->controller="HomeController";
}

$this->action=isset($url[1]) ? $url[1] : "index"; // Default function is index if no function has wrotten
unset($url[0],$url[1]); //  cas a prameter has found
$this->paramas= !empty($url) ? array_values($url) : [];

  
 //   $this->controller=isset($url[0]) ? ucwords($url[0])."Controller": "HomeController";
//      echo $this->controller;
var_dump($this->paramas);
   



    


} else {
    $url = '';
}
//    echo $_SERVER['QUERY_STRING'];
/*
echo '<br>';
var_dump(  $url);
echo '<br>';
echo $url[0];
*/
    }
public function render()
{
    if(class_exists($this->controller)){
   // echo 'welcome';
$controller=new $this->controller;
if(method_exists($controller,$this->action))
  //echo 'found fun';
call_user_func_array([$controller,$this->action],$this->paramas); // run methods of controller
else 
echo 'Method Not Exist ';
    }
else 
echo 'the '.$this->controller."Not Found";
}
  
}

?>
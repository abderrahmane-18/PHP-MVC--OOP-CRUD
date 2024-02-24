<?php
class View{

    public static function load($view_name,$data_view=[])
    {
        $file=VIEWS.$view_name.'.php';
        if(file_exists($file)){
            extract($data_view);
        ob_start();
        require_once($file);
        ob_end_flush();
        }
        else 
        echo 'the view '.$view_name ."dosen't exist" ;
    }
}

?>
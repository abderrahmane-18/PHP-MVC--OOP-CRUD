<?php 
class HomeController{
    public function index()
    {
        echo "this class is " .__CLASS__ ." and this method is " .__METHOD__;
    //    echo '<br>';
      //  echo 'the value of the paramater is ' .$id;
      //  echo '<br>';
        //echo 'id 2 = '.$id1;
        $data['title']="home page";
        $data['content']='Content of home page with mvc ';
        echo '<br>';
       //  require_once(VIEWS.'home.php');
       View::load('home',$data);
    }
}

?>
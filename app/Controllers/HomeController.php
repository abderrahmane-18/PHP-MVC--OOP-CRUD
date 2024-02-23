<?php 
class HomeController{
    public function index($id,$id1)
    {
        echo "this class is " .__CLASS__ ." and this method is " .__METHOD__;
        echo '<br>';
        echo 'the value of the paramater is ' .$id;
        echo '<br>';
        echo 'id 2 = '.$id1;
    }
}

?>
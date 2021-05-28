<?php
class ajax extends controller{
    public  mixed $ajax;

    public function __construct()
    {
        $this->ajax=$this->model("dangky_model");
    }
    public function checkEmail(){
        $em=$_POST['em'];
        echo $this->ajax->checkEmail($em);
    }
}
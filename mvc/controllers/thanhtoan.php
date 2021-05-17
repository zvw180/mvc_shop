<?php
class thanhtoan extends controller {
    public mixed $thanhtoan_model;
    public function __construct(){
        $this->thanhtoan_model=$this->model("thanhtoan_model");

    }
    public function show(){
        $this->view("index_view", [
            "page" => "thanhtoan"
        ]);
    }
    public function addSP(){
        if(isset($_POST['btnAdd'])){
            $idsp=$_POST['product-title'];
            $sizesp=$_POST['product-size'];
            $soluongsp=$_POST['product-quanity'];

            $kq=$this->thanhtoan_model->addsanpham( $idsp, $sizesp, $soluongsp);

            $this->view("index_view",[
                "page"=>"chitiet",
                "result"=>$kq
            ]);
        }
    }
}
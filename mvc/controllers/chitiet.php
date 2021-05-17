<?php
class chitiet extends controller{
    public mixed $chitiet_model;

    public function __construct(){
        $this->chitiet_model = $this->model("chitiet_model");
    }
    public function show()
    {
        $a=basename($_SERVER['QUERY_STRING']);
        $kq = $this->chitiet_model->getchitiet($a);

        if ($a ==="url=chitiet") {
            $this->view("index_view", [
                "page" => "trangchu"
            ]);
        } else{
            $this->view("index_view", [
                "page" => "chitiet",
                "sanpham" => $kq
            ]);
        }
    }
}
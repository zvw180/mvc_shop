<?php

class sanpham extends controller
{
    public mixed $sanpham_model;

    public function __construct()
    {
        $this->sanpham_model = $this->model("sanpham_model");

    }

    public function show()
    {
        $this->view("index_view", [
            "page" => "sanpham",
            "sanpham" => $this->sanpham_model->getSP()
        ]);
    }

    public function page($a = null)
    {

        $kq = $this->sanpham_model->getPage($a);
        if ($a > 0) {
            $this->view("index_view", [
                "page" => "sanpham",
                "sanpham" => $kq
            ]);
        }else{
            $this->view("index_view", [
                "page" => "sanpham",
                "sanpham" => $kq
            ]);
        }

    }

    public function men()
    {

        $this->view("index_view", [
            "page" => "sanpham",
            "sanpham" => $this->sanpham_model->getmen()
        ]);
    }

    public function women()
    {
        $this->view("index_view", [
            "page" => "sanpham",
            "sanpham" => $this->sanpham_model->getwomen()
        ]);
    }




}
<?php

class trangchu extends controller
{
    public function show()
    {
        $sanpham = $this->model("sanpham_model");
        $this->view("index_view", [
            "page" => "trangchu",
            "sanpham" => $sanpham->getSP()
        ]);
    }
}
<?php

class thanhtoan extends controller
{
    public mixed $thanhtoan_model;

    public function __construct()
    {
        $this->thanhtoan_model = $this->model("thanhtoan_model");

    }

    public function show()
    {
        $this->view("index_view", [
            "page" => "thanhtoan"
        ]);
    }

}
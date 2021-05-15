<?php
class lienhe extends controller
{
    public function show()
    {
        $this->view("index_view", [
            "page" => "lienhe",
        ]);
    }
}
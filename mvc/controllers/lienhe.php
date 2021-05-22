<?php

class lienhe extends controller
{
    public mixed $lienhe_model;

    public function __construct()
    {
        $this->lienhe_model = $this->model("lienhe_model");
    }

    public function show()
    {
        $this->view("index_view", [
            "page" => "lienhe",
        ]);
    }

    public function addC()
    {
        if (isset($_POST['action']) && $_POST['action'] === 'addC') {
            $email = $_POST['email'];
            $this->lienhe_model->getEmail($email);
        }


    }
    public function addL(){
        if (isset($_POST['action']) && $_POST['action'] === 'addL') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $this->lienhe_model->getFulll($name,$email, $subject,$message );
        }
    }
}
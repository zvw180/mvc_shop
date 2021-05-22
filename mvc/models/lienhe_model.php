<?php

class lienhe_model extends database
{

    public function getEmail($e)
    {
        $sql = "INSERT INTO lienhe (email) VALUES ('" . $e . "')";
        mysqli_query($this->con, $sql);
    }
    public function getFulll($name,$email,$subject,$message)
    {
        $sql = "INSERT INTO lienhe (name,email,subject,message) VALUES ('".$name."','" . $email . "','" . $subject . "','" . $message . "')";
        mysqli_query($this->con, $sql);
    }
}
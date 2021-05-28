<?php


class sendemail_model extends database
{
    public function sendEmail()
    {
        $sql = "SELECT * FROM accemail WHERE username='admin9999' ";
        $row = mysqli_query($this->con, $sql);
        $mang = array();
        while ($run = mysqli_fetch_array($row)) {
            $mang[] = $run;
        }
        return (json_encode($mang, JSON_THROW_ON_ERROR | true));
    }
}
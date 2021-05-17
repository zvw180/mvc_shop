<?php

class sanpham_model extends database
{

    public function getSP()
    {
        $sql = "SELECT * FROM sanpham LIMIT 9";

        $row = mysqli_query($this->con, $sql);
        $mang = array();
        while ($run = mysqli_fetch_array($row)) {
            $mang[] = $run;
        }
        return (json_encode($mang, JSON_THROW_ON_ERROR | true));
    }

    public function getPage($a)
    {

        if ($a > 0) {
            $b = ($a * 9 ) + 1;
            $sql = "SELECT * FROM sanpham LIMIT $b,9 ";
        } else {
            $sql = "SELECT * FROM sanpham LIMIT 0 ,9 ";
        }
        $row = mysqli_query($this->con, $sql);
        $mang = array();
        while ($run = mysqli_fetch_array($row)) {
            $mang[] = $run;
        }
        return (json_encode($mang, JSON_THROW_ON_ERROR | true));
    }

    public function getmen()
    {
        $sql = "SELECT * FROM sanpham WHERE gioiTinh='men' ";
        $row = mysqli_query($this->con, $sql);
        $mang = array();
        while ($run = mysqli_fetch_array($row)) {
            $mang[] = $run;
        }
        return (json_encode($mang, JSON_THROW_ON_ERROR | true));
    }

    public function getwomen()
    {
        $sql = "SELECT * FROM sanpham WHERE gioiTinh='women' ";
        $row = mysqli_query($this->con, $sql);
        $mang = array();
        while ($run = mysqli_fetch_array($row)) {
            $mang[] = $run;
        }
        return (json_encode($mang, JSON_THROW_ON_ERROR | true));
    }
}
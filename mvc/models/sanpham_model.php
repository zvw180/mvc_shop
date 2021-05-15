<?php

class sanpham_model extends database
{

    public function getSP()
    {
        $sql = "SELECT * FROM sanpham LIMIT 9";
        return mysqli_query($this->con, $sql);
    }

    public function getPage($a)
    {
        $b= $a + 9;
        $sql = "SELECT * FROM sanpham LIMIT 9 OFFSET " . $b . " ";
        return mysqli_query($this->con, $sql);
    }

    public function getmen()
    {
        $sql = "SELECT * FROM sanpham WHERE gioiTinh='men' ";
        return mysqli_query($this->con, $sql);
    }

    public function getwomen()
    {
        $sql = "SELECT * FROM sanpham WHERE gioiTinh='women' ";
        return mysqli_query($this->con, $sql);
    }
}
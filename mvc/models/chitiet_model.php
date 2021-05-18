<?php

class chitiet_model extends database
{
    public function getchitiet($id)
    {
        $sql = "SELECT * FROM sanpham WHERE idurl='".$id."' ";
        $row = mysqli_query($this->con, $sql);
        $mang = array();
        while ($run = mysqli_fetch_array($row)) {
            $mang[] = $run;
        }
        return (json_encode($mang, true));
    }
    public function getCart($id)
    {
        $sql = "SELECT * FROM sanpham WHERE id='".$id."' ";
        $row = mysqli_query($this->con, $sql);
        $mang = array();
        while ($run = mysqli_fetch_array($row)) {
            $mang[] = $run;
        }
        return (json_encode($mang, true));
    }

}

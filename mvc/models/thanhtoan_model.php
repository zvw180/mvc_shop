<?php

class thanhtoan_model extends database
{
    /**
     * @throws JsonException
     */
    public function getthanhtoan()
    {
        $sql = "SELECT * FROM sanpham ";
        $row = mysqli_query($this->con, $sql);
        $mang = array();
        while ($run = mysqli_fetch_array($row)) {
            $mang[] = $run;
        }
        return json_encode($mang, true);
    }

    public function addsanpham($idsp,$sizesp, $soluongsp)
    {
        $sql = "SELECT * FROM sanpham WHERE id='" . $idsp . "'";
        $row = mysqli_query($this->con, $sql);
        $mang = array();
        while ($run = mysqli_fetch_array($row)) {
            $mang[] = $run;
        }
        return json_encode($mang, true);
    }
}
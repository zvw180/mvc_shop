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
        $data = array();
        $sql = "SELECT * FROM sanpham WHERE id='" . $idsp . "'";
        $row = mysqli_query($this->con, $sql);
        $result=mysqli_fetch_array($row);
        $data[] = $result;
        $rowArray= array($result[0]['id'] = array('id'=>$result['id'],'tenSP' => $result['tenSP'], 'giaSP' => $result['giaSP'], 'anhSP' => $result['anhSP'], 'sizeSP' =>$sizesp, 'soluongSP' => $soluongsp));
        return  $_SESSION["cart_id"] = $rowArray;

    }
}
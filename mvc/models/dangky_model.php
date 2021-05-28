<?php

class dangky_model extends database
{
    public function aadUsers($fname,$lname,$email,$phone,$password,$address,$address2,$city,$zip)
    {
        $sql = "INSERT INTO users (fname,lname,email,phone,password,address,address2,city,zip) VALUES ('".$fname."','".$lname."','".$email."','".$phone."','".$password."','".$address."','".$address2."','".$city."','".$zip."') ";

        mysqli_query($this->con, $sql);
    }

    public function checkEmail($em){
        $sql="SELECT * FROM users WHERE email='".$em."' ";
        $rows=mysqli_query($this->con,$sql);
        $kq=false;
        if (mysqli_num_rows($rows)>0){
            $kq=true;
        }
        return json_encode($kq, true);
    }
}

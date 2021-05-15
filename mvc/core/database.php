<?php

class database
{
    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "ptn141122";
    protected $dbname = "mvc_shop";

    public function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}
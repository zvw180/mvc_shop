<?php

class chitiet extends controller
{
    public mixed $chitiet_model;

    public function __construct()
    {
        $this->chitiet_model = $this->model("chitiet_model");
    }

    public function show()
    {
        $a = basename($_SERVER['QUERY_STRING']);
        $kq = $this->chitiet_model->getchitiet($a);

        if ($a === "url=chitiet") {
            $this->view("index_view", [
                "page" => "trangchu"
            ]);
        } else {
            $this->view("index_view", [
                "page" => "chitiet",
                "sanpham" => $kq
            ]);
        }
    }

    public function addSP()
    {
        if (isset($_POST['addCart'])) {
            $idsp = $_POST['product-title'];
            $sizesp = $_POST['product-size'];
            $soluongsp = $_POST['product-quanity'];
            $kq = $this->chitiet_model->getCart($idsp);
            $rowArray = array($idsp => array('id' => $idsp, 'size' => $sizesp, 'soluong' => $soluongsp));

            if (!empty($_SESSION["cart_id"])) {
                if (in_array($idsp, array_keys($_SESSION['cart_id']))) {
                    foreach ($_SESSION['cart_id'] as $key => $value) {
                        if ($idsp == $key) {
                            if (empty($_SESSION['cart_id'][$key]["soluong"])) {
                                $_SESSION['cart_id'][$key]["soluong"] = 0;
                            } else {
                                $_SESSION['cart_id'][$key]["soluong"] += $soluongsp;
                            }
                        }
                    }
                }else{
                    $_SESSION["cart_id"] = array_merge($_SESSION["cart_id"], $rowArray);
                }
            } else {
                $_SESSION["cart_id"] = $rowArray;
            }


            $this->view("index_view", [
                "page" => "chitiet",
                "sanpham" => $kq
            ]);
        }
    }
}
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

    public function addCart()
    {
        if (isset($_POST['action']) && $_POST['action'] === 'addCart') {
            if (isset($_SESSION["shopping_cart"])) {
                $is_available = 0;
                foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                    if ($_SESSION["shopping_cart"][$keys]['product_id'] === $_POST["product_id"]) {
                        $is_available++;
                        $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
                    }
                }
                if ($is_available === 0) {
                    $item_array = array(
                        'product_id' => $_POST["product_id"],
                        'product_name' => $_POST["product_name"],
                        'product_image'=>$_POST['product_image'],
                        'product_price' => $_POST["product_price"],
                        'product-size' => $_POST['product-size'],
                        'product_quantity' => $_POST["product_quantity"]
                    );
                    $_SESSION["shopping_cart"][] = $item_array;
                }
            } else {
                $item_array = array(
                    'product_id' => $_POST["product_id"],
                    'product_name' => $_POST["product_name"],
                    'product_image'=>$_POST['product_image'],
                    'product_price' => $_POST["product_price"],
                    'product-size' => $_POST['product-size'],
                    'product_quantity' => $_POST["product_quantity"]
                );
                $_SESSION["shopping_cart"][] = $item_array;
            }
        }
    }
    public function buyCart()
    {
        if (isset($_POST['action']) && $_POST['action'] === 'buyCart') {
            if (isset($_SESSION["shopping_cart"])) {
                $is_available = 0;
                foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                    if ($_SESSION["shopping_cart"][$keys]['product_id'] === $_POST["product_id"]) {
                        $is_available++;
                        $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
                    }
                }
                if ($is_available === 0) {
                    $item_array = array(
                        'product_id' => $_POST["product_id"],
                        'product_name' => $_POST["product_name"],
                        'product_image'=>$_POST['product_image'],
                        'product_price' => $_POST["product_price"],
                        'product-size' => $_POST['product-size'],
                        'product_quantity' => $_POST["product_quantity"]
                    );
                    $_SESSION["shopping_cart"][] = $item_array;
                }
            } else {
                $item_array = array(
                    'product_id' => $_POST["product_id"],
                    'product_name' => $_POST["product_name"],
                    'product_image'=>$_POST['product_image'],
                    'product_price' => $_POST["product_price"],
                    'product-size' => $_POST['product-size'],
                    'product_quantity' => $_POST["product_quantity"]
                );
                $_SESSION["shopping_cart"][] = $item_array;
            }
        }
    }


}
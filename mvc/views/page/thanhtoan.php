<h1>hello</h1>
<?php
//if (isset($_SESSION["cart_id"])) {
//    foreach ($_SESSION["cart_id"] as $item) {
//        echo $item['id'];
//        echo $item['size'];
//        echo $item['soluong'] . "<br>";
//    }
//}
echo json_encode($_SESSION);
//unset($_SESSION['cart_id']);
?>






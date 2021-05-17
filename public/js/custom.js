$(document).ready(function () {
    $("#submit").click(function (e) {
        if (document.getElementById('cart').checkValidity()) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'http://localhost/mvc_shop/thanhtoan/addSP/',
                data: $(this).serialize()
            });
        }
        return true;
    });
})
$(document).ready(function () {
    $("#addC").click(function (e) {
        if (document.getElementById('lienhe').checkValidity()) {
            e.preventDefault();

            $.ajax({
                url: 'http://localhost/mvc_shop/lienhe/addC/',
                method: 'post',
                data: $("#lienhe").serialize() + '&action=addC',
                success: function (response) {
                    console.log("done");
                    Swal.fire({
                        icon: 'success',
                        title: 'Gui Thanh Cong',
                        showConfirmButton: false,
                        timer: 1500
                    })

                }

            });
        }
        return true;
    });
    $("#addLienhe").click(function (e) {
        if (document.getElementById('addLien').checkValidity()) {
            e.preventDefault();

            $.ajax({
                url: 'http://localhost/mvc_shop/lienhe/addL/',
                method: 'post',
                data: $("#addLien").serialize() + '&action=addL',
                success: function (response) {
                    console.log("done");

                    Swal.fire({
                        icon: 'success',
                        title: 'Gui Thanh Cong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            });
        }
        return true;
    });
    $("#addtocart").click(function (e) {
        if (document.getElementById('addCart').checkValidity()) {
            e.preventDefault();

            $.ajax({
                url: 'http://localhost/mvc_shop/chitiet/addCart/',
                method: 'post',
                data: $("#addCart").serialize() + '&action=addCart',
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thanh Cong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            });
        }
        return true;
    });
    $("#buytocart").click(function (e) {
        if (document.getElementById('addCart').checkValidity()) {
            e.preventDefault();

            $.ajax({
                url: 'http://localhost/mvc_shop/chitiet/buyCart/',
                method: 'post',
                data: $("#addCart").serialize() + '&action=buyCart',
                success: function (response) {
                    window.open("http://localhost/mvc_shop/thanhtoan/");
                }

            });
        }
        return true;
    });
    $("#bdangky").click(function (e) {
        if (document.getElementById('fdangky').checkValidity()) {
            e.preventDefault();

            $.ajax({
                url: 'http://localhost/mvc_shop/dangky/moidangky/',
                method: 'post',
                data: $("#fdangky").serialize() + '&action=aadUsers',
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thanh Cong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }

            });
        }
        return true;
    });
    $("#inputEmail4").keyup(function () {
        var email = $(this).val();
        $.post("http://localhost/mvc_shop/ajax/checkEmail/", {em: email}, function (data) {

            if (data === "false") {
                $("#messageEm").html("");
                $("#inputEmail4").removeClass("is-invalid");
                $("#inputEmail4").addClass("is-valid");
                $("#bdangky").removeClass("d-none");
            } else {
                $("#messageEm").html("Email đã tồn tại");
                $("#inputEmail4").addClass("is-invalid");
                $("#inputEmail4").removeClass("is-valid");
                $("#bdangky").addClass("d-none");
            }
        });
    });


})
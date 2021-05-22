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
})
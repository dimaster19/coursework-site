$(function () {

    function showCartCount(count) {

        $('.cart-qty-p').text(count);
    }


    function delCartItem(id, count) {
        location.reload();

        // document.getElementById(id).remove();
        // $('.cart-qty').text(count);
        
    }

    $('.add-product-link').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');

        $.ajax({
            url: 'cartaction',
            type: 'GET',
            data: { cart: 'add', id: id },
            dataType: 'json',
            success: function (res) {
                if (res.code == 'ok') {
                    showCartCount(res.answer);

                } else {
                    alert(res.answer);
                }
            },
            error: function () {
                alert('Error');
            }
        });
    });


    $('.del-product-link').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');

        $.ajax({
            url: 'cartaction',
            type: 'GET',
            data: { cart: 'del', id: id },
            dataType: 'json',
            success: function (res) {
                if (res.code == 'deleted') {
                    delCartItem(res.answer, res.count);
                } else {
                    alert(res.answer);
                }
            },
            error: function () {
                alert('Error');
            }
        });
    });
});
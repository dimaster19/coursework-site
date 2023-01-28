$(function () {

    function showCartCount(count) {
     
        $('.cart-qty').text(count);
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
});
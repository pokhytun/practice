$(document).ready(function(){

    $('.order-list__item').on('click', function(){
        let id = $(this).data('id');

        $.ajax({
            url: '/orders/order',
            method: "get",
            data: {
                id: id
            },
            beforeSend: function()
            {
                $('.load').addClass('load_active');
            },
            success: function (response) {
                $('.check').replaceWith(response.html);

            }


        })
        .done(function(){
            $('.load').removeClass('load_active');
        })
        .fail(function(){
            alert('error');
        });

    })

});



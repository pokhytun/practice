$(document).ready(function(){

    $('.add-to-cart').on('click', function(e){
        e.preventDefault();
        let elm = $(this);

        $.ajax({
            url: '/add-to-cart/elem',
            method: "get",
            data: {
                id: elm.data('id'),
            },
            success: function (response) {
                updateCartSize(response.cartSize);
                flushMessage('Added to cart');
            }

        })
        .fail(function(){
            alert('error');
        });
    })

    $('.remove-from-cart').on('click', function(e){
        e.preventDefault();
        let elm = $(this);
        console.log(elm.data('id'))
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            url: '/remove-from-cart/elem',
            method: "delete",
            data: {
                id: elm.data('id'),
            },
            success: function (response) {
                removeItemFromCart(elm);
                updateCartSize(response.cartSize);
                updateTotalPrice(response.totalPrice);
                checkCart(response.totalPrice);
            }

        })
        .fail(function(){
            alert('error');
        });
    })

    $('.cart_quantity_up').on('click', function(e){
        e.preventDefault();
        let elm = $(this);
        let qty = +elm.siblings('.cart_quantity_input').val() + 1;
        changeQuantityAjax(elm,qty);

    })

    $('.cart_quantity_down').on('click', function(e){
        e.preventDefault();
        let elm = $(this);
        let qty = +elm.siblings('.cart_quantity_input').val() - 1;

        if(qty > 0){
            changeQuantityAjax(elm,qty);
        }

    })

    $('.cart_quantity_input').on('input' , function (){
        let rgx = /^[0-9]+$/;

        if(rgx.test($(this).val())){
            changeQuantityAjax($(this).siblings('a'), $(this).val())
        }
    })

});


function updateCartSize(size){
    $('#cart-size').html(size);
}

function removeItemFromCart(elm){
    elm.parents(':eq(1)').remove();
}

function changeQuantityAjax(elm, qty){

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        url: '/update-cart',
        method: "patch",
        data: {
            id: elm.data('id'),
            qty: qty,
        },
        success: function (response) {
            elm.siblings('.cart_quantity_input').val(response.qty);
            updateItemTotal(elm, response.price, qty);
            updateTotalPrice(response.totalPrice);
        }
    })
    .fail(function(){
        alert('error');
    });

}

function updateItemTotal(elm, price, qty){
   elm.parents(':eq(2)').children('.cart_total').children('.cart_total_price').html(qty * price + '$');
}

function updateTotalPrice(total){
    $('.total-price').html(total + '$');
}

function flushMessage(text){

    $('body').append(
        $(`<div class="message">${text}</div>`)
    )

    setTimeout(function(){

        $('.message').animate({ right: -15 + '%', }, 1000, function() {

            $(this).remove()

        });

    }, 1000);
}

function checkCart(price){
    if(!price){
        $('.cart-container').replaceWith('<h2 class="title text-center">Empty</h2>');
    }
}

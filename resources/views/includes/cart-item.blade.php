<tr class="cart-row">
    <td class="cart_product">
        <a href="#"><img src="images/cart/three.png" alt=""></a>
    </td>
    <td class="cart_description">
        <h4><a href="{{ route('products.show' , $product['id']) }}">{{ $product['title'] }}</a></h4>
        <p>Web ID: {{$id = $product['id'] }}</p>
    </td>
    <td class="cart_price">
        <p>${{ $product['price'] }}</p>
    </td>
    <td class="cart_quantity">
        <div class="cart_quantity_button">
            <a class="cart_quantity_up change-quantity"  data-id="{{$id}}" href="#"> + </a>
            <input class="cart_quantity_input" type="text" name="quantity" value="{{ $product['quantity'] }}" autocomplete="off" size="2">
            <a class="cart_quantity_down change-quantity" data-id="{{$id}}" href="#"> - </a>
        </div>
    </td>
    <td class="cart_total">
        <p class="cart_total_price">{{ $product['quantity'] * $product['price']}}$</p>
    </td>
    <td class="cart_delete">
        <a class="cart_quantity_delete remove-from-cart" data-id="{{$id}}" href="#"><i class="fa fa-times"></i></a>
    </td>
</tr>

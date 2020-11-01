



<!-- Add to cart bar -->
    <a href="javascript:void(0)" class="overlay" onclick="closeCart()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my cart</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeCart()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        @if(Session::has('cart'))
        <div class="cart_media">
            <ul class="cart_product">
                @foreach(Session::get('cart')->_items as $values)
                @php($cart_item = $values['product'])
                <li>
                    <div class="media">
                        <a href="{{ url('detail/'.$cart_item['id']) }}">
                            <img alt="" class="mr-3" src="{{ asset(image($cart_item['products_image'], 0)) }}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <h4>{{ $cart_item['products_name'] }}</h4>
                            </a>
                            <h4>
                               <span>{{ $values['quantity'] }} x @money($cart_item['products_price'])</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="{{ url('/delete-cart-dropdown') }}" id="{{ $cart_item['id'] }}" class="delete-cart-dropdown-item">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>@money( Session::get('cart')->_totalPrice)</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="{{ url('/cart') }}" class="btn btn-normal btn-xs view-cart">view cart</a>
                        <a href="#" class="btn btn-normal btn-xs checkout">checkout</a>
                    </div>
                </li>
            </ul>
        </div>
        @else
           <div class="error-section empty-popup-shopping-cart">
                <img src="{{ asset('web/images/shopping-cart.png') }}" alt="shopping-cart">
                <h2>empty cart</h2>
                <a href="{{ url('/products') }}" class="btn btn-normal">continue shopping</a>
            </div>
        @endif
    </div>
<!-- Add to cart bar end-->

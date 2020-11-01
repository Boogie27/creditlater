
<!-- Add to wishlist bar -->
    <a href="javascript:void(0)" class="overlay" onclick="closeWishlist()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my wishlist</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeWishlist()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        @if(get_wish_list())
        <div class="cart_media">
            <ul class="cart_product">
                @php($total = 0)
                @foreach(get_wish_list() as $wishlist)
                @php($total += $wishlist->total)
                <li>
                    <div class="media">
                        <a href="{{ url('detail/'.$wishlist->id) }}">
                            <img alt="{{ $wishlist->products_name }}" class="mr-3" src="{{ asset(image($wishlist->products_image, 0)) }}">
                        </a>
                        <div class="media-body">
                            <a href="{{ url('detail/'.$wishlist->id) }}">
                                <h4>{{ $wishlist->products_name }}</h4>
                            </a>
                            <h4>
                                <span>@money($wishlist->products_price)</span>
                            </h4>
                        </div>
                    </div>
                    <div class="close-circle">
                        <a href="{{ url('/quick-delete-wishlist-item') }}" class="quick-delete-wishlist-item" id="{{ $wishlist->id }}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
            <ul class="cart_total">
                <li>
                    <div class="total">
                        <h5>subtotal : <span>@money($total)</span></h5>
                    </div>
                </li>
                <li>
                    <div class="buttons">
                        <a href="{{ url('/wishlist') }}" class="btn btn-normal btn-block  view-cart">view wislist</a>
                    </div>
                </li>
            </ul>
        </div>
        @else
        <div class="error-section">
            <h2>empty wishlist</h2>
            <a href="{{ url('/products') }}" class="btn btn-normal">continue shopping</a>
        </div>
        @endif
    </div>
<!-- Add to wishlist bar end-->

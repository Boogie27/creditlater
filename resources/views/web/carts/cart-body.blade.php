


<!--section start-->
@if(Session::has('cart'))
<section class="cart-section section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">action</th>
                        <th scope="col">total</th>
                    </tr>
                    </thead>
                    @foreach(Session::get('cart')->_items as $values)
                    @php($cart_item = $values['product'])
                    <tbody>
                    <tr>
                        <td>
                            <a href="{{ url('detail/'.$cart_item['id']) }}"><img src="{{ asset(image($cart_item['products_image'], 0)) }}" alt="{{ $cart_item['products_name'] }}"  class=" "></a>
                        </td>
                        <td><a href="{{ url('detail/'.$cart_item['id']) }}">{{ $cart_item['products_name'] }}</a>
                            <div class="mobile-cart-content row">
                                <div class="col-xs-3">
                                    <div class="qty-box">
                                        <div class="input-group">
                                           <input type="number" name="quantity" class="form-control input-number" value="{{ $values['quantity'] }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <h2 class="td-color">@money($cart_item['products_price'])</h2></div>
                                <div class="col-xs-3">
                                    <h2 class="td-color"><a href="{{ url('/cart-item-delete') }}" class="icon delete-cart-item" id="{{ $cart_item['id'] }}"><i class="fa fa-times"></i></a></h2></div>
                            </div>
                        </td>
                        <td>
                            <h2>@money($cart_item['products_price'])</h2></td>
                        <td>
                            <div class="qty-box">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control input-number" value="{{ $values['quantity'] }}">
                                </div>
                            </div>
                        </td>
                        <td><a href="{{ url('/cart-item-delete') }}" class="icon delete-cart-item" id="{{ $cart_item['id'] }}"><i class="fa fa-times"></i></a></td>
                        <td>
                            <h2 class="td-color">@money($values['price'])</h2></td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                    <tr>
                        <td>total price :</td>
                        <td>
                            <h2>@money(Session::get('cart')->_totalPrice)</h2></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-12"><a href="{{ url('/products') }}" class="btn btn-normal">continue shopping</a> <a href="#" class="btn btn-normal ml-3">check out</a></div>
        </div>
    </div>
</section>
@else
   @include("web.carts.empty-cart")
@endif
<!--section end-->


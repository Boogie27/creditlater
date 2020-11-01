
<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>Detail</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="{{ url('detail/'.$product->id) }}">detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-pt-space bg-light">
    <div class="collection-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-1 col-sm-2 col-xs-12">
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="slider-right-nav">
                                @php($product_image = explode(',', $product->products_image))
                                @foreach($product_image as $values)
                                <div><img src="{{ asset($values) }}" alt="" class="img-fluid  image_zoom_cls-0"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-10 col-xs-12 order-up">
                    <div class="product-right-slick no-arrow">
                        @php($product_image = explode(',', $product->products_image))
                        @foreach($product_image as $values)
                        <div><img src="{{ asset($values) }}" alt="" class="img-fluid  image_zoom_cls-0"></div>
                        @endforeach
                   </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-right product-description-box ">
                        <h2>{{ $product->products_name}}</h2>
                        <div class="border-product">
                            <h6 class="product-title">product details</h6>
                            <p>{{ $product->products_detail}}</p>
                        </div>
                        <div class="border-product">
                            <div class="product-icon">
                                <ul class="product-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                                <form action="{{ url('/add-to-wishlist') }}" method="post" class="d-inline-block">
                                    <button class="wishlist-btn add-to-wishlist-btn" id="{{ $product->id }}" data-url="{{ url('/add-to-wishlist') }}"><i class="fa fa-heart"></i><span class="title-font">Add To WishList</span></button>
                                </form>
                            </div>
                        </div>
                        <div class="border-product pb-0">
                            <h6 class="product-title">100% SECURE PAYMENT</h6>
                            <div class="payment-card-bottom">
                                @if(!empty($paymentMethods))
                                <ul>
                                    @foreach($paymentMethods as $paymentMethod)
                                    <li>
                                        <a href="#"><img src="{{ asset($paymentMethod->payment_method_image) }}" alt="{{ $paymentMethod->payment_method_name}}"></a>
                                    </li>
                                    @endforeach
                                </ul>
                                @else
                                <div class="alert-danger text-center p-3">
                                     Add payment gateways
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-right product-form-box  product-right-exes">
                        <h4><del>@money( $product->products_price + $product->products_price_slash)</del><span>  @percentage([$product->products_price, $product->products_price_slash])</span></h4>
                        <h3> @money($product->products_price)</h3>
                        <div class="product-description border-product">
                            <h6 class="product-title">Time Reminder</h6>
                            <div class="timer">
                                <p id="demo"><span>25 <span class="padding-l">:</span> <span class="timer-cal">Days</span> </span><span>22 <span class="padding-l">:</span> <span class="timer-cal">Hrs</span> </span><span>13 <span class="padding-l">:</span> <span class="timer-cal">Min</span> </span><span>57 <span class="timer-cal">Sec</span></span>
                                </p>
                            </div>
                            @if($product->products_type)
                            <h6 class="product-title">select size</h6>
                            <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Sheer Straight Kurta</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body"><img src="{{ asset('web/images/size-chart.jpg') }}" alt="" class="img-fluid "></div>
                                    </div>
                                </div>
                            </div>
                            @php($sizes = explode(',', $product->products_type))
                            <div class="size-box" id="size_box">
                                <ul>
                                    @foreach($sizes as $size)
                                    <li class="{{ $sizes[0] == $size ? 'active' : ''}}"><a href="#" id="{{ $size }}">{{ first_letter($size) }}</a></li>
                                    @endforeach
                                </ul>
                                <input type="hidden" class="form-control text-center mt-2" id="detail_product_size" value="{{ $sizes[0] }}">
                            </div>
                            @endif
                            <h6 class="product-title md-3">qty available: {{ $product->products_quantity }}</h6>
                            <!-- <p style="background-color: red; color: #fff">Out of stock</p> -->
                            <h6 class="product-title">quantity</h6>
                            <div class="qty-box" id="detail_qty_box">
                                <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="fa fa-angle-left"></i></button> </span>
                                <input type="text" name="quantity" class="form-control input-number" id="product_qty" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="fa fa-angle-right"></i></button></span></div>
                            </div>
                        </div>
                        <div class="product-buttons">
                            <a href="{{ url('/add-to-cart') }}" class="btn btn-normal" data-size="small" data-id="{{ $product->id }}" id="add_to_cart">add to cart</a> 
                            <a href="#" class="btn btn-normal" id="buy-now">buy now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->
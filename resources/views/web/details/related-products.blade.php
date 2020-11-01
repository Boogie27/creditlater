
<!-- related products -->
<section class="section-big-py-space  ratio_asos bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-12 product-related">
                <h2>related products</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 product">
                <div class="product-slide no-arrow">
                    @foreach($relatedProducts as $products)
                    <div>
                        <div class="product-box">
                            <div class="product-imgbox">
                                <div class="product-front">
                                   <a href="{{ url('/detail/'.$products->id) }}"><img src="{{ asset(explode(',', $products->products_image)[0]) }} " class="img-fluid  " alt="product"></a>
                                </div>
                                <div class="product-back">
                                    <a href="{{ url('/detail/'.$products->id) }}"><img src="{{ asset(explode(',', $products->products_image)[1]) }} " class="img-fluid  " alt="product"></a>
                                </div>
                            </div>
                            <div class="product-detail detail-center ">
                                <div class="detail-title">
                                    <div class="detail-left">
                                        <div class="rating-star">
                                        @if(star_rating($products->id))
                                            @for($i = 1; $i <= 5; $i++)
                                                @if($i <= star_rating($products->id))
                                                <i class="fa fa-star text-warning"></i>
                                                @else
                                                <i class="fa fa-star text-secondary"></i>
                                                @endif
                                            @endfor
                                            @else
                                            @for($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star text-secondary"></i>
                                            @endfor
                                        @endif
                                        </div>
                                        <a href="#">
                                            <h6 class="price-title">
                                                {{ $products->products_name }}
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="detail-right">
                                        <div class="check-price">
                                            @money($products->products_price_slash)
                                        </div>
                                        <div class="price">
                                            <div class="price">
                                                 @money($products->products_price)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-detail">
                                     <button data-toggle="modal" class="quick-add-to-cartBtn" id="{{ $products->id }}" data-url="{{ url('/quick-add-to-cart') }}" data-target="#addtocart" title="Add to cart">
                                        <i class="ti-bag"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist" id="{{ $products->id }}" data-url="{{ url('/quick-add-to-wishlist') }}" class="quick-add-to-wishlist">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ url('/quick-view') }}" data-toggle="modal" class="quick-view-btn" data-target="#quick-view" title="Quick View" id="{{ $products->id }}">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- related products -->
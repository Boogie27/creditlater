<!-- media tab start -->
<section class="section-big-pb-space ratio_40 pb-10">
    <!--tab product-->
    <section class="section-py-space" >
        <div class="tab-product-main">
            <div class="tab-prodcut-contain">
                <ul class="tabs tab-title">
                @foreach($tab_categories as $key => $tab_category)
                    <li class="{{ $key == 0? 'current' : '' }}"><a href="tab-{{ $tab_category->id }}" class="tab_anchor">{{ $tab_category->category_name }}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!--tab product-->
    <div class="custom-container product">
        <div class="row">
            <div class="col pr-0">
                <div class="theme-tab product tab-abjust">
                    <div class="tab-content-cls">
                       <!-- tab start -->
                       @foreach($tab_categories as $key => $tab_category)
                        <div id="tab-{{ $tab_category->id }}" class="tab-content {{ $key == 0? 'default' : '' }}">
                         
                            <div class="product-slide-6 product-m no-arrow">
                                @foreach($tab_category->products as $product)
                                <div>
                                    <div class="product-box">
                                        <div class="product-imgbox">
                                            <div class="product-front">
                                                <a href="{{ url('/detail/'.$product->id)}}"><img src="{{ asset(explode(',', $product->products_image)[0]) }}" class="img-fluid  " alt="product"></a>
                                            </div>
                                            <div class="product-back">
                                                <a href="{{ url('/detail/'.$product->id)}}"><img src="{{ asset(explode(',', $product->products_image)[1]) }}" class="img-fluid  " alt="product"></a>
                                            </div>
                                            <div class="product-icon">
                                                <button data-toggle="modal" class="quick-add-to-cartBtn" id="{{ $product->id }}" data-url="{{ url('/quick-add-to-cart') }}" data-target="#addtocart" title="Add to cart">
                                                    <i class="ti-bag"></i>
                                                </button>
                                                <a href="javascript:void(0)" title="Add to Wishlist" id="{{ $product->id }}" data-url="{{ url('/quick-add-to-wishlist') }}" class="quick-add-to-wishlist">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ url('/quick-view') }}" data-toggle="modal" class="quick-view-btn" data-target="#quick-view" title="Quick View" id="{{ $product->id }}">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="new-label">
                                                <div>new</div>
                                            </div>
                                            <div class="on-sale">
                                                on sale
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-title">
                                                <div class="detail-left">
                                                    <div class="rating-star">
                                                    @if(star_rating($product->id))
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= star_rating($product->id))
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
                                                           {{ $product->products_name}}
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class="detail-right">
                                                    <div class="check-price">
                                                        @money($product->products_price_slash)
                                                    </div>
                                                    <div class="price">
                                                        <div class="price">
                                                             @money($product->products_price)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- media tab end -->

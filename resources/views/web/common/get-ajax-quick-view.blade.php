
<!-- Quick-view modal popup start-->

                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img">
                            <img src="{{ asset(image($product->products_image, 0)) }}" alt="{{ $product->products_name }}" class="img-fluid quick-view-white-image">
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2 class="quick-view-name" style="text-transform: uppercase;"></h2>
                            <h3 class="quick-view-price">{{ $product->products_name }}</h3>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p class="quick-view-detail">{{ $product->products_detail }}</p>
                            </div>
                            <div class="product-description border-product">
                                @if($product->products_type)
                                @php($sizes = explode(',', $product->products_type))
                                <div class="size-box">
                                    <ul>
                                    @foreach($sizes as $size)
                                    <li class="{{ $sizes[0] == $size ? 'active' : ''}}"><a href="#" id="{{ $size }}">{{ first_letter($size) }}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="fa fa-angle-left"></i></button> </span>
                                    <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="fa fa-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons"><a href="#" class="btn btn-normal">add to cart</a> <a href="{{ url('detail/'.$product->id) }}" class="btn btn-normal quick-view-id">view detail</a></div>
                        </div>
                    </div>
              
<!-- Quick-view modal popup end-->
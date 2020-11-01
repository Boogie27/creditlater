
<!-- Quick-view modal popup start-->
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="row" id="quick_view_dropdown_modal">
                    <div class="col-lg-6 col-xs-12">
                        <div class="quick-view-img">
                            <img src="{{ asset('web/images/quick-view.jpg') }}" alt="" class="img-fluid quick-view-white-image">
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2 class="quick-view-name" style="text-transform: uppercase;"></h2>
                            <h3 class="quick-view-price"></h3>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p class="quick-view-detail"></p>
                            </div>
                            <div class="product-description border-product">
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="fa fa-angle-left"></i></button> </span>
                                    <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="fa fa-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="product-buttons"><a href="#" class="btn btn-normal">add to cart</a> <a href="" class="btn btn-normal quick-view-id">view detail</a></div>
                        </div>
                    </div>
                </div>
                <div class="quick-view-preloader">
                    <img src="{{ asset('web/images/ajax-loader.gif') }}" alt="ajax-loader">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick-view modal popup end-->
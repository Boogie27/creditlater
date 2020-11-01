
<!--testimonial start-->
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide-1 no-arrow">
                    <div>
                        <div class="testimonial-contain">
                            <div class="media">
                                <div class="testimonial-img">
                                    <img src="{{ asset('web/images/testimonial/1.jpg') }}" class="img-fluid rounded-circle " alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <h5>mark jecno</h5>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-contain">
                            <div class="media">
                                <div class="testimonial-img">
                                    <img src="{{ asset('web/images/testimonial/2.jpg') }}" class="img-fluid rounded-circle  " alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <h5>mark jecno</h5>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial-contain">
                            <div class="media">
                                <div class="testimonial-img">
                                    <img src="{{ asset('web/images/testimonial/3.jpg') }}" class="img-fluid rounded-circle  " alt="testimonial">
                                </div>
                                <div class="media-body">
                                    <h5>mark jecno</h5>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial end-->

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
                                                       
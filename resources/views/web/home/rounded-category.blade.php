<!--rounded category start-->
<section class="rounded-category">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="slide-6 no-arrow">
                    @foreach($tab_categories as $tab_category)
                    <div>
                        <div class="category-contain">
                            <a href="{{ url('category/'.$tab_category->category_name) }}">
                                <div class="img-wrapper">
                                    <img src="{{ asset($tab_category->round_cat_image) }}" alt="{{$tab_category->category_name}}" class="img-fluid">
                                </div>
                                <div>
                                    <div class="btn-rounded">
                                        {{$tab_category->category_name}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--rounded category end-->
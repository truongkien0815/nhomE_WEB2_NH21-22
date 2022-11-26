@extends('layout')
@section('main-content')
<!-- Slider -->

<div class="main_slider" style="background-image:url(img/slider_1.jpg)">
    <div class="container fill_height">
        <div class="row align-items-center fill_height">
            <div class="col">
                <div class="main_slider_content">
                    <h6>Spring / Summer Collection 2022</h6>
                    <h1>Get up to 30% Off New Arrivals</h1>
                    <div class="red_button shop_now_button"><a href='{{ asset("/search?option=alls") }}'>shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner -->

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url(img/banner_1.jpg)">
                    <div class="banner_category">
                        <a href="{{ url('/search?option=manu_name&key=Ao') }}">áo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url(img/desc_3.jpg)">
                    <div class="banner_category">
                        <a href="{{ url('/search?option=manu_name&key=Quan') }}">quần</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner_item align-items-center" style="background-image:url(img/banner_2.jpg)">
                    <div class="banner_category">
                        <a href="{{ url('/search?option=manu_name&key=Tui') }}">túi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- New Arrivals -->

<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title new_arrivals_title">
                    <h2>New Arrivals</h2>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <div class="row">
<<<<<<< HEAD
                                <!-- <li class="grid_sorting_button button d-flex flex-column justify-content-center"><a
                                        data-toggle="tab" href="#np">Alls</a></li> -->
                                        <li class="grid_sorting_button button d-flex flex-column justify-content-center"><a
                                        data-toggle="tab" id="type" data-type="0" href="#np">Alls</a></li>
                              

                                @foreach($allmanus as $value)
                                <!-- <li><a class="grid_sorting_button button d-flex flex-column justify-content-center"
                                        data-toggle="tab" href="#np{{ $value->manu_id }}">{{ $value->manu_name }}</a>
                                </li> -->
                                
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" id="type" data-type="{{$value->manu_id}}" data-userid="" >{{ $value->manu_name }}</li>
=======
                                @if(isset(Auth::user()->name))
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center"><a
                                        data-toggle="tab" id="type" data-type="0" data-userid="{{Auth::user()->id}}"
                                        href="#np">Alls</a></li>
                                @else
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center"><a
                                        data-toggle="tab" id="type" data-type="0" data-userid="1" href="#np">Alls</a>
                                </li>
                                @endif
                                @foreach($allmanus as $value)
                                @if(isset(Auth::user()->name))
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                    id="type" data-type="{{$value->manu_id}}" data-userid="{{Auth::user()->id}}">
                                    {{ $value->manu_name }}</li>
                                @else
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                    id="type" data-type="{{$value->manu_id}}" data-userid="1">{{ $value->manu_name }}
                                </li>
                                @endif
>>>>>>> kien_nhomE
                                @endforeach
                            </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row tt">
            <div class="col">
                <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
<<<<<<< HEAD
                        <!-- Slide 1 -->
                        @foreach($newproducts as $value)
                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img href="{{ url('/products/'.$value->product_id.'/'.$value->manu_id) }}"
                                        src="{{ asset('img/'.$value->image) }}" alt="" style="height: 225px;">
                                </div>
                                <!--  -->   
                                <!--  -->
                                <div
                                    class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                    <?php if ($value->sale > 0) { ?>
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                    <?php } else { ?>
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name"><a
                                            href="{{ url('/products/'.$value->product_id.'/'.$value->manu_id) }}">{{ $value->product_name }}</a>
                                    </h6>
                                    <?php if ($value->sale > 0) { ?>
                                    <h6 class="product_price">
                                        {{ number_format($value->price - ($value->price * $value->sale / 100)) . "đ " }}<del
                                            class="product-old-price"></del>
                                    </h6>
                                    <?php } else { ?>
                                    <h6 class="product_price">{{ number_format($value->price)."đ" }}</h6>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a
                                    href="{{ url('/carts/add/'.$value->product_id) }}">
                                    </i> add to cart</button>
                                </a></div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Slider Navigation -->

                    <div
                        class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div
                        class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </div>
=======
                    <!-- Slide 1 -->
                    @foreach($newproducts as $value)
                    <div class="product-item women">
                        <div class="product product_filter">
                            <div class="product_image">
                                <img href="{{ url('/products/'.$value->product_id.'/'.$value->manu_id) }}"
                                    src="{{ asset('img/'.$value->image) }}" alt="" style="height: 225px;">
                            </div>
                            <!--  -->
                            <?php if ($user == NULL) { ?>
                            <form action="{{ url('/others/index/'.$value->product_id.'/0') }}" method="get">
                                <div class="product-btns">
                                    <button name="action" value="wishlist" class="add-to-wishlist"><i
                                            class="fa fa-heart-o"></i><span class="tooltipp"></span></button>
                                </div>
                            </form>
                            <?php } else { ?>
                            <form action="{{ url('/others/index/'.$value->product_id.'/'.$user->id) }}" method="get">
                                <div class="product-btns">
                                    <?php $like = 0;
													foreach ($user->others as $other) {
														if ($other->product_id == $value->product_id && $other->like == "1") {
															$like = 1; ?>
                                    <button name="action" value="wishlist" class="add-to-wishlist"><i style="color:red;"
                                            class="fa fa-heart-o"></i><span class="tooltipp"></span></button>
                                    <?php }
													}
													if ($like == 0) { ?>
                                    <button name="action" value="wishlist" class="add-to-wishlist"><i
                                            class="fa fa-heart-o"></i><span class="tooltipp"></span></button>
                                    <?php }
									?>
                                </div>
                            </form>
                            <?php } ?>
                            <!--  -->
                            <div
                                class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                <?php if ($value->sale > 0) { ?>
                                <div class="product-label">
                                    <span class="sale">{{ "-".$value->sale."%" }}</span>
                                    <span class="new">NEW</span>
                                </div>
                                <?php } else { ?>
                                <div class="product-label">
                                    <span class="new">NEW</span>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="product_info">
                                <h6 class="product_name"><a
                                        href="{{ url('/products/'.$value->product_id.'/'.$value->manu_id) }}">{{ $value->product_name }}</a>
                                </h6>
                                <?php if ($value->sale > 0) { ?>
                                <h6 class="product_price">
                                    {{ number_format($value->price - ($value->price * $value->sale / 100)) . "đ " }}
                                    <del class="product-old-price">{{ number_format($value->price)."đ" }}</del>
                                </h6>
                                <?php } else { ?>
                                <h6 class="product_price">{{ number_format($value->price)."đ" }}</h6>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="red_button add_to_cart_button"><a
                                href="{{ url('/carts/add/'.$value->product_id) }}">
                                </i> add to cart</button>
                            </a></div>
                    </div>
                    @endforeach
                </div>

                <!-- Slider Navigation -->

                <div
                    class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div
                    class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
            </div>
>>>>>>> kien_nhomE
        </div>
    </div>
</div>

<!-- Deal of the week -->

<div class="deal_ofthe_week">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="deal_ofthe_week_img">
                    <img src="img/deal_ofthe_week.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 text-right deal_ofthe_week_col">
                <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                    <div class="section_title">
                        <h2>Deal Of The Week</h2>
                    </div>
                    <ul class="timer">
                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="day" class="timer_num">03</div>
                            <div class="timer_unit">Day</div>
                        </li>
                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="hour" class="timer_num">15</div>
                            <div class="timer_unit">Hours</div>
                        </li>
                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="minute" class="timer_num">45</div>
                            <div class="timer_unit">Mins</div>
                        </li>
                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                            <div id="second" class="timer_num">23</div>
                            <div class="timer_unit">Sec</div>
                        </li>
                    </ul>
                    <div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Best Sellers -->

<div class="best_sellers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title new_arrivals_title">
                    <h2>Best Sellers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="product_slider_container">
                    <div class="owl-carousel owl-theme product_slider">

                        <!-- Slide 1 -->
                        @foreach($topsellings as $value)
                        <div class="owl-item product_slider_item">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                    <img href="{{ url('/products/'.$value->product_id.'/'.$value->manu_id) }}"
                                        src="{{ asset('img/'.$value->image) }}" alt="" style="height: 225px;">
                                </div>
                                <div class="favorite"></div>
                                <div
                                    class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                    <?php if ($value->sale > 0) { ?>
                                    <div class="product-label">
<<<<<<< HEAD
=======
                                        <span class="sale">{{ "-".$value->sale."%" }}</span>
>>>>>>> kien_nhomE
                                        <span class="new">NEW</span>
                                    </div>
                                    <?php } else { ?>
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name"><a
                                            href="{{ url('/products/'.$value->product_id.'/'.$value->manu_id) }}">{{ $value->product_name }}</a>
                                    </h6>
                                    <?php if ($value->sale > 0) { ?>
                                    <div class="product_price">
<<<<<<< HEAD
                                        {{ number_format($value->price - ($value->price * $value->sale / 100)) . "đ " }}
=======
                                        {{ number_format($value->price - ($value->price * $value->sale / 100)) . "đ " }}<del
                                            class="product-old-price">{{ number_format($value->price)."đ" }}
>>>>>>> kien_nhomE
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Slider Navigation -->

                    <div
                        class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div
                        class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Benefit -->

<div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <div class="benefit_content">
<<<<<<< HEAD
                        <h6>free shipping:</h6>
=======
                        <h6>free shipping</h6>
>>>>>>> kien_nhomE
                        <p>Suffered Alteration in Some Form</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>cach on delivery</h6>
                        <p>The Internet Tend To Repeat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>45 days return</h6>
                        <p>Making it Look Like Readable</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>opening all week</h6>
                        <p>8AM - 09PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blogs -->

<div class="blogs">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title">
                    <h2>Latest Blogs</h2>
                </div>
            </div>
        </div>
        <div class="row blogs_container">
            <div class="col-lg-4 blog_item_col">
                <div class="blog_item">
                    <div class="blog_background" style="background-image:url(img/blog_1.jpg)"></div>
                    <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                        <span class="blog_meta">by admin | dec 01, 2017</span>
                        <a class="blog_more" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 blog_item_col">
                <div class="blog_item">
                    <div class="blog_background" style="background-image:url(img/blog_2.jpg)"></div>
                    <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                        <span class="blog_meta">by admin | dec 01, 2017</span>
                        <a class="blog_more" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 blog_item_col">
                <div class="blog_item">
                    <div class="blog_background" style="background-image:url(img/blog_3.jpg)"></div>
                    <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                        <span class="blog_meta">by admin | dec 01, 2017</span>
                        <a class="blog_more" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

@endsection
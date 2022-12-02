<!-- single -->
<link rel="stylesheet" type="text/css" href='{{ asset("styles/products_styles.css") }}'>
<link rel="stylesheet" type="text/css" href='{{ asset("styles/products_responsive.css") }}'>
<!--  -->
@extends('layout')
@section('main-content')

<div class="container single_product_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li>
                        <h3 class="breadcrumb-header">Chi tiết sản phẩm</h3>
                    </li>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active"><i class="fa fa-angle-right" aria-hidden="true"></i>Single Product</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-7">
            <div class="single_product_pics">
                <div class="row">
                    <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                        <div class="single_product_thumbnails">
                            <ul>
                                <li><img class="product_small_image" src="{{ asset('/img/'.$product->image) }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 image_col order-lg-2 order-1">
                        <div class="single_product_image">
                            <img class="single_product_image_background" src="{{ asset('/img/'.$product->image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="product_details">
                <div class="product_details_title">
                    <h2>{{ $product->product_name }}</h2>
                </div>
                <ul class="star_rating">
                    <?php for ($i = 0; $i < 5; $i++) {
                        if ($i < $product->star) { ?>
                            <i class="fa fa-star"></i>
                        <?php } else { ?>
                            <i class="fa fa-star-o"></i>
                    <?php }
                    } ?>
                </ul>
                <div>
                    <?php if ($product->sale > 0) { ?>
                        <h3 class="product_price">
                            {{ number_format($product->price - ($product->price * $product->sale / 100)) . "đ " }}<del class="product-old-price">{{ number_format($product->price)."đ" }}</del>
                        </h3>
                        <span class="product-available">In Stock</span>
                    <?php } else { ?>
                        <h3 class="product_price">{{ number_format($product->price)."đ" }}</h3>
                        <span class="product-available">In Stock</span>
                    <?php } ?>
                </div>
                <div>
                    <?php $temp = explode("#", $product->description); ?>
                    <table>
                        <tbody>
                            @foreach($temp as $value)
                            <tr>{{ $value }}</tr><br>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <form action="{{ url('/carts/add/'.$product->product_id) }}" method="get" class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                    <span>Quantity:</span>
                    <div class="qty-label">
                        <div class="input-number">
                            <input type="number" name="quantity" value="1">
                        </div>
                    </div>
                    <button class="red-button add-to-cart-button"><a>add to cart</a></button>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- Products Tabs -->

<div class="tabs_section_container">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabs_container">
                    <ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
                        <li class="tab active" data-active-tab="tab_1"><span>Description</span></li>
                        <li class="tab" data-active-tab="tab_2"><span>Details</span></li>
                        <li class="tab" data-active-tab="tab_3"><span>Reviews (
                                <?php $count = 0;
                                foreach ($others as $value) {
                                    if ($value->product_id == $product->product_id && $value->submit != NULL) {
                                        $count++;
                                    }
                                }
                                echo $count; ?>
                                )</a></li>
                        </span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Tab Description -->
                <div id="tab_1" class="tab_container active">
                    <div class="row">
                        <thead>
                            <tr>
                                @foreach($temp as $value)
                                <?php $temp1 = explode(":", $value); ?>
                                <th style="text-align: center; vertical-align: middle">{{ $temp1[0] }}</th>
                                @endforeach
                            </tr>
                        </thead>
                    </div>
                </div>
                <!-- Tab Additional Info -->

                <div id="tab_2" class="tab_container">
                    <div class="row">
                        <div class="col additional_info_col">
                            <div class="tab_title additional_info_title">
                                <h4>Additional Information</h4>
                            </div>
                            <p>COLOR:<span>Gold, Red</span></p>
                            <p>SIZE:<span>L,M,XL</span></p>
                        </div>
                    </div>
                </div>

                <!-- Tab Reviews -->

                <div id="tab_3" class="tab_container">
                    <div class="row">
                        <!-- User Reviews -->
                        <!-- User Review -->
                        <div id="reviews">
                            <ul class="reviews">
                                <?php foreach ($others as $value) {
                                    if ($value->user_id == "0") {
                                        $guest = explode("#", $value->submit); ?>
                                        <li>
                                            <div class="review-heading">
                                                <h5 class="name">{{ $guest[0] }}
                                                    <p style="font-size: 7px;">{{ '('.$guest[1].')'}}</p>
                                                </h5>
                                                <p class="date">{{ date('d/m/Y h:i:s', strtotime($value->created_at)) }}</p>
                                                <div class="review-rating">
                                                    <?php for ($i = 0; $i < 5; $i++) {
                                                        if ($i < $value->star) { ?>
                                                            <i class="fa fa-star"></i>
                                                        <?php } else { ?>
                                                            <i class="fa fa-star-o empty"></i>
                                                    <?php }
                                                    } ?>
                                                </div>
                                            </div>
                                            <div class="review-body">
                                                <p>{{ $guest[2] }}</p>
                                            </div>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <div class="review-heading">
                                                <h5 class="name">{{ $value->users->name }}</h5>
                                                <p class="date">{{ date('d/m/Y h:i:s', strtotime($value->created_at)) }}</p>
                                                <div class="review-rating">
                                                    <?php for ($i = 0; $i < 5; $i++) {
                                                        if ($i < $value->star) { ?>
                                                            <i class="fa fa-star"></i>
                                                        <?php } else { ?>
                                                            <i class="fa fa-star-o empty"></i>
                                                    <?php }
                                                    } ?>
                                                </div>
                                            </div>
                                            <div class="review-body">
                                                <p>{{ $value->submit }}</p>
                                            </div>
                                        </li>
                                <?php }
                                } ?>
                            </ul>
                            <ul>
                                {{ $others->appends(request()->all())->links() }}
                            </ul>
                        </div>
                    </div>

                    <!-- Add Review -->
                    <!-- Thinh -->
                    <div class="col-lg-6 add_review_col">
                        <?php if ($user != NULL) { ?>
                            <form action="{{ url('/star/'.$product->manu_id.'/'.$product->product_id.'/'.$user->id) }}" class="review-form" method="GET">
                                <div class="add_review" id="review_form" action="post">
                                    <textarea name="submit" class="input" placeholder="Your Review" required></textarea>
                                    <div class="input-rating">
                                        <span>Your Rating: </span>
                                        <div class="user_star_rating">
                                            <input class="fa fa-star" id="star1" name="rating" value="1" type="radio" aria-hidden="true" required><label for="star1"></label>
                                            <input class="fa fa-star" id="star2" name="rating" value="2" type="radio" aria-hidden="true" required><label for="star2"></label>
                                            <input class="fa fa-star" id="star3" name="rating" value="3" type="radio" aria-hidden="true" required><label for="star3"></label>
                                            <input class="fa fa-star" id="star4" name="rating" value="4" type="radio" aria-hidden="true" required><label for="star4"></label>
                                            <input class="fa fa-star" id="star5" name="rating" value="5" type="radio" aria-hidden="true" required><label for="star5"></label>
                                        </div>
                                    </div>
                                    <button class="primary-btn">Submit</button>
                            </form>
                        <?php } else { ?>
                            <form action="{{ url('/star/'.$product->manu_id.'/'.$product->product_id.'/0') }}" class="review-form" method="GET">
                                <input id="review_name" class="form_input input_name" name="name" type="text" placeholder="Name*" required="required" data-error="Name is required.">
                                <input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
                                <textarea id="review_message" class="input_review" name="message" placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
                                <div class="input-rating">
                                    <span>Your Rating: </span>
                                    <div class="user_star_rating">
                                        <input class="fa fa-star" id="star1" name="rating" value="1" type="radio" aria-hidden="true" required><label for="star1"></label>
                                        <input class="fa fa-star" id="star2" name="rating" value="2" type="radio" aria-hidden="true" required><label for="star2"></label>
                                        <input class="fa fa-star" id="star3" name="rating" value="3" type="radio" aria-hidden="true" required><label for="star3"></label>
                                        <input class="fa fa-star" id="star4" name="rating" value="4" type="radio" aria-hidden="true" required><label for="star5"></label>
                                        <input class="fa fa-star" id="star5" name="rating" value="5" type="radio" aria-hidden="true" required><label for="star5"></label>
                                    </div>
                                </div>
                                <button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">Submit</button>
                            <?php } ?>
                    </div>

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
                        <h6>free shipping:</h6>
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

@endsection
<!-- Slick -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" />

<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}" />

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" type="text/css" href='{{ asset("styles/single_styles.css") }}'>
<link rel="stylesheet" type="text/css" href='{{ asset("styles/single_responsive.css") }}'>
<link rel="stylesheet" type="text/css" href='{{ asset("styles/contact_styles.css") }}'>
<link rel="stylesheet" type="text/css" href='{{ asset("styles/contact_responsive.css") }}'>
<link rel="stylesheet" type="text/css" href='{{ asset("styles/categories_styles.css") }}'>
<link rel="stylesheet" type="text/css" href='{{ asset("styles/categories_responsive.css") }}'>
<!--  -->
@extends('layout')
@section('main-content')

<div class="breadcrumbs d-flex flex-row align-items-center">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li>
    </ul>
</div>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Checkout</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Billing address</h3>
                    </div>
                    <form action="{{ url('/createpayment') }}" method="get">


                        <div class="form-group">
                            <label for="#">
                                <h5>Địa chỉ</h5>
                            </label>
                            <input class="input" type="text" required="required" name="address" placeholder="Address">
                        </div>


                        <div class="form-group">
                            <label for="#">
                                <h5>Số điện thoại</h5>
                            </label>
                            <input class="input" type="tel" required="required" pattern="^[0-9]{10,11}$" name="telephone"
                                placeholder="Telephone">
                        </div>

                </div>
                <!-- /Billing Details -->

                <!-- Shiping Details -->
                <div class="shiping-details">
                    <div class="section-title">
                        <h3 class="title">Shiping address</h3>
                    </div>

                </div>
                <!-- /Shiping Details -->


            </div>
            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Your Order</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>PRODUCT</strong></div>
                        <div><strong>TOTAL</strong></div>
                    </div>
                    <div class="order-products">
                        <?php
						$total = 0;
						foreach ($allproducts as $value) {
							if (session()->has('carts' . $value->product_id)) { ?>
                        <div class="order-col">
                            <div>{{ session()->get('carts' . $value->product_id)."x ". $value->product_name}}</div>
                            <div>
                                <?php if ($value->sale > 0) {
											$total += ($value->price - ($value->price * $value->sale / 100)) * session()->get('carts' . $value->product_id);
											echo number_format(($value->price - ($value->price * $value->sale / 100)) * session()->get('carts' . $value->product_id)) . "đ ";
										} else {
											$total += ($value->price * session()->get('carts' . $value->product_id));
											echo number_format($value->price * session()->get('carts' . $value->product_id)) . "đ";
										} ?>
                            </div>
                        </div>
                        <?php }
						} ?>
                    </div>
                    <div class="order-col shipping">
                        <div>Shiping : </div>
                        <div><strong>FREE</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">{{ number_format($total).'đ' }}</strong></div>
                    </div>
                </div>
                <div class="payment-method">


                </div>

                <?php if ($user != NULL) { ?>
                <button type="submit" class="primary-btn order-submit"> Place order </button>
                <?php } else { ?>
                <a href="{{ url('/login') }}" class="primary-btn order-submit">Place order</a>
                <?php } ?>
            </div>
            </form>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@endsection
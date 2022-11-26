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

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Payments history</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Payments history</li>
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
            <?php foreach ($allpayments as $key => $payment) {    ?>
<<<<<<< HEAD
                <!-- Order Details -->
                <div class="col-md-12 order-details" style="margin-bottom: 100px;">
                    <div class="section-title text-center">
                        <h3 class="title">Payment {{ ++$key }}</h3>
                    </div>
                    <div><strong>CUSTOMER: {{ $user->name }}</strong></div>
                    <div>created at: {{ date('d/m/Y h:i:s', strtotime($payment->created_at)) }}</div>
                    <hr>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <div class="order-products">
                            <?php $total = 0;
=======
            <!-- Order Details -->
            <div class="col-md-12 order-details" style="margin-bottom: 100px;">
                <div class="section-title text-center">
                    <h3 class="title">Payment {{ ++$key }}</h3>
                </div>
                <div><strong>CUSTOMER: {{ $user->name }} </strong></div>
                <div>created at: {{ date('d/m/Y h:i:s', strtotime($payment->created_at)) }}</div>


                <hr>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>PRODUCT</strong></div>
                        <div><strong>img</strong></div>
                        <div><strong>TOTAL</strong></div>



                    </div>
                    <div class="order-products">
                        <?php $total = 0;
>>>>>>> kien_nhomE
                            foreach ($alldetails as $detail) {
                                if ($detail->payment_id ==  $payment->payment_id) {
                                    if ($detail->products->sale > 0) {
                                        $total += $detail->quantity * $detail->products->price - ($detail->products->price * $detail->products->sale / 100); ?>
<<<<<<< HEAD
                                        <div class="order-col">
                                            <div>{{ $detail->products->product_name.' (quantity: '. $detail->quantity.', price: '.number_format($detail->products->price - ($detail->products->price * $detail->products->sale / 100)).'đ)'}}</div>
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div>{{ number_format($detail->quantity * $detail->products->price - ($detail->products->price * $detail->products->sale / 100)).'đ' }}</div>
                                        </div>
                                    <?php } else {
                                        $total += $detail->quantity * $detail->products->price; ?>
                                        <div class="order-col">
                                            <div>{{ $detail->products->product_name.' (quantity: '. $detail->quantity.', price: '.number_format($detail->products->price).'đ)'}}</div>
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div>{{ number_format($detail->quantity * $detail->products->price).'đ' }}</div>
                                        </div>
                            <?php  }
                                }
                            } ?>
                        </div>
                        <hr>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">
                                    {{ number_format($total).'đ' }}
                                </strong>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="" class="primary-btn order-submit">Delete</a> -->
                </div>
                <!-- /Order Details -->
=======
                        <div class="order-col">
                            <div>
                                {{ $detail->products->product_name.' (quantity: '. $detail->quantity.', price: '.number_format($detail->products->price - ($detail->products->price * $detail->products->sale / 100)).'đ)'}}
                            </div>

                            <img src="{{url('img/'.$detail->products->image)}}" height="100px" width="100px" alt="">
                            <!-- <div class="product-widget">
                                                
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="{{url('img/'.$detail->products->image)}}" alt="">
                                                    </a>
                                                </div>
                                            </div> -->
                            <div>
                                {{ number_format($detail->quantity * $detail->products->price - ($detail->products->price * $detail->products->sale / 100)).'đ' }}
                            </div>

                        </div>
                        <?php } else {
                                        $total += $detail->quantity * $detail->products->price; ?>
                        <div class="order-col">
                            <div>
                                {{ $detail->products->product_name.' (quantity: '. $detail->quantity.', price: '.number_format($detail->products->price).'đ)'}}
                            </div>
                            <img src="{{url('img/'.$detail->products->image)}}" height="100px" width="100px" alt="">
                            <!-- <div class="product-widget">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img src="{{url('img/'.$detail->products->image)}}" alt="">
                                                    </a>
                                                </div>
                                            </div> -->
                            <div>

                                {{ number_format($detail->quantity * $detail->products->price).'đ' }}
                            </div>

                        </div>
                        <?php  }
                                }
                            } ?>
                    </div>
                    <hr>

                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">
                                {{ number_format($total).'đ' }}
                            </strong>
                        </div>
                    </div>
                    <div class="order-col">

                        <?php  foreach ($alldetails as $detail) {
                                if ($detail->payment_id ==  $payment->payment_id) {
                                    if($detail->status == 0)
                                    {
                                        echo 'Status: Chờ xác nhận'.'<br>';
                                    }
                                    else
                                    {
                                        echo 'Status: Đang giao'.'<br>';
                                    }
                                }}
                                    ?>
                    </div>


                </div>
                <!-- <form action="{{ url('/payment_del/'. $payment->payment_id) }}" method="get">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </button>
                 
                  </form> -->
                <a href="{{ url('/payment_del/'. $payment->payment_id) }}" class="primary-btn order-submit">Delete</a>
            </div>
            <!-- /Order Details -->
>>>>>>> kien_nhomE
            <?php  } ?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@endsection
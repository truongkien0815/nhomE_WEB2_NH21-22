<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fashion Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href='{{ asset("styles/bootstrap4/bootstrap.min.css") }}'>
    <link href='{{ asset("plugins/font-awesome-4.7.0/css/font-awesome.min.css") }}' rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href='{{ asset("plugins/OwlCarousel2-2.2.1/owl.carousel.css") }}'>
    <link rel="stylesheet" type="text/css" href='{{ asset("plugins/OwlCarousel2-2.2.1/owl.theme.default.css") }}'>
    <link rel="stylesheet" type="text/css" href='{{ asset("plugins/OwlCarousel2-2.2.1/animate.css") }}'>
    <link rel="stylesheet" type="text/css" href='{{ asset("styles/main_styles.css") }}'>
    <link rel="stylesheet" type="text/css" href='{{ asset("styles/responsive.css") }}'>
    <!-- products	 -->
    <link rel="stylesheet" href='{{ asset("plugins/themify-icons/themify-icons.css") }}'>
    <link rel="stylesheet" type="text/css" href='{{ asset("plugins/jquery-ui-1.12.1.custom/jquery-ui.css") }}'>
    <!-- Bootstrap -->
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300">

            <!-- Top Navigation -->

            <div class="top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="top_nav_left">free ship cho đơn hàng trên 500k</div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-search">
                                <form method="GET" action="{{ url('/search') }}">
                                    <select class="input-select" name="option" style="border-top-width: 1px;">
                                        <option value="description">Description </option>
                                        <option value="product_name">Product name</option>
                                        <option value="manu_name">Protypes</option>
                                    </select>
                                    <input name="key" class="input" placeholder="Search here">
                                    <button class="search-btn">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <div class="top_nav_right">
                                <ul class="top_nav_menu">

                                    <!-- Currency / Language / My Account -->

                                    <li class="currency">
                                        <a href="#">
                                            usd
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="currency_selection">
                                            <li><a href="#">cad</a></li>
                                            <li><a href="#">aud</a></li>
                                            <li><a href="#">eur</a></li>
                                            <li><a href="#">gbp</a></li>
                                        </ul>
                                    </li>
                                    <li class="language">
                                        <a href="#">
                                            English
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="language_selection">
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">German</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </li>
                                    <li class="account">
                                        <a href="#">
                                            My Account

                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">

                                            <?php if ($user != NULL) {
											if ($user->name == "admin") { ?>
                                            <li><a href="{{ url('/admin') }}"><i class="fa fa-user-o"></i>User
                                                    {{ $user->name }}</a></li>
                                            <?php } else { ?>
                                            <li><a href="{{ url('/') }}"><i class="fa fa-user-o"></i>
                                                    {{ $user->name }}</a></li>
                                            <?php } ?>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a class="nav-link" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                                        style="text-align: center; color: back">Exit
                                                        <i class="fa fa-arrow-circle-right"></i></a>
                                                </form>
                                            </li>
                                            <?php } else { ?>
                                            <li><a href="{{ url('/login') }}"><i class="fa fa-user-o"></i>Login</a></li>
                                            <li><a href="{{ url('/register') }}"><i
                                                        class="fa fa-user-plus"></i>Register</a></li>
                                            <?php } ?>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="{{ url('/index') }}">fashion<span>shop</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="{{ url('/') }}">home</a></li>
                                    <li><a href="{{ url('/search?option=alls') }}">Shop</a></li>
                                    <li><a href="{{ url('/search?option=manu_name&key=Ao') }}">Áo</a></li>
                                    <li><a href="{{ url('/search?option=manu_name&key=Quan') }}">Quần</a></li>
                                    <li><a href="{{ url('/search?option=manu_name&key=Giay') }}">Giày</a></li>
                                    <li><a href="{{ url('/search?option=manu_name&key=Tui') }}">Túi</a></li>
                                </ul>
                                <!-- <div class="col-md-4 clearfix"> -->
                                <ul class="navbar_user">
                                    <?php if ($user != NULL) { ?>
                                    <li><a href="{{ url('/search?option=wishlist') }}"><i class="fa fa-heart-o"></i>
                                            <div class="shows">
                                                {{ count($allothers); }}
                                            </div>
                                        </a></li>
<<<<<<< HEAD
                                    <li><a href="{{ url('/payments') }}"><i class="fa fa-heart-o"></i>
=======
                                    <li><a href="{{ url('/payments') }}">
                                        <!-- <i class="fa fa-heart-o"></i> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
</svg>
>>>>>>> kien_nhomE
                                            <div class="shows">
                                                {{ count($allpayments); }}
                                            </div>
                                        </a></li>
                                    <?php } ?>
                                    <li class="dropdown">
                                        <a href="{{ url('/carts') }}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <div class="shows">
                                                <?php
										        $total = 0;
										        foreach ($allproducts as $value) {
											        if (session()->has('carts' . $value->product_id)) {
												        $total++;
											        }
										        }
										        echo $total; ?>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item has-children">
                        <a href="#">
                            usd
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#">cad</a></li>
                            <li><a href="#">aud</a></li>
                            <li><a href="#">eur</a></li>
                            <li><a href="#">gbp</a></li>
                        </ul>
                    </li>
                    <li class="menu_item has-children">
                        <a href="#">
                            English
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                    <li class="menu_item has-children">
                        <a href="#">
                            My Account
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                        </ul>
                    </li>
                    <li class="menu_item"><a href="#">home</a></li>
                    <li class="menu_item"><a href="#">shop</a></li>
                    <li class="menu_item"><a href="#">promotion</a></li>
                    <li class="menu_item"><a href="#">pages</a></li>
                    <li class="menu_item"><a href="#">blog</a></li>
                    <li class="menu_item"><a href="#">contact</a></li>
                </ul>
            </div>
        </div>

        @yield('main-content')

        <!-- Newsletter -->

        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div
                            class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                            <h4>Newsletter</h4>
                            <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
<<<<<<< HEAD
                        <form action="post">
=======
                      
                        <form action="#">
>>>>>>> kien_nhomE
                            <div
                                class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                                <input id="newsletter_email" type="email" placeholder="Your email" required="required"
                                    data-error="Valid email is required.">
                                <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                                    value="Submit">subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div
                            class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                            <ul class="footer_nav">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">FAQs</a></li>
<<<<<<< HEAD
                                <li><a href="contact.html">Contact us</a></li>
=======
                                <li><a href="contact">Contact us</a></li>
>>>>>>> kien_nhomE
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_nav_container">
                            <div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a
                                    href="https://themewagon.com">ThemeWagon</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src='{{ asset("js/jquery-3.2.1.min.js") }}'></script>
    <script src='{{ asset("styles/bootstrap4/popper.js") }}'></script>
    <script src='{{ asset("styles/bootstrap4/bootstrap.min.js") }}'></script>
    <script src='{{ asset("plugins/Isotope/isotope.pkgd.min.js") }}'></script>
    <script src='{{ asset("plugins/OwlCarousel2-2.2.1/owl.carousel.js") }}'></script>
    <script src='{{ asset("plugins/easing/easing.js") }}'></script>
    <script
        src='{{ asset("https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA") }}'>
    </script>
    <script src='{{ asset("plugins/jquery-ui-1.12.1.custom/jquery-ui.js") }}'></script>
    <script src='{{ asset("js/custom.js") }}'></script>
    <script src='{{ asset("js/categories_custom.js") }}'></script>
    <script src='{{ asset("js/contact_custom.js") }}'></script>
    <script src='{{ asset("js/single_custom.js") }}'></script>
    <script src='{{ asset("js/carts_custom.js") }}'></script>
    <script src='{{ asset("js/ajax.js") }}'></script>

</body>

</html>
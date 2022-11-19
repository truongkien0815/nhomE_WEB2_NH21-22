<div class="row">
    <div class="col">
        <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
            <!-- Product -->
            <div id="np" class="tab-pane active">
                <div class="products-slick" data-nav="#slick-nav-np">
                    @foreach($newproducts as $value)
                    <div class="product-item women">
                        <div class="product discount product_filter">
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
                            <div class="product_info">{{ $value->manufacturers->manu_name }}
                                <h6 class="product_name"><a
                                        href="{{ url('/products/'.$value->product_id.'/'.$value->manu_id) }}">{{ $value->product_name }}</a>
                                </h6>
                                <?php if ($value->sale > 0) { ?>
                                <h6 class="product_price">
                                    {{ number_format($value->price - ($value->price * $value->sale / 100)) . "đ " }}<del
                                        class="product-old-price">{{ number_format($value->price)."đ" }}</del>
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
                <div id="slick-nav-np" class="products-slick-nav"></div>
            </div>
        </div>
    </div>
</div>
<!-- /tab -->
@foreach($allmanus as $manu)
<!-- tab -->
<div id="np{{ $manu->manu_id }}" class="tab-pane">
    <div class="products-slick" data-nav="#slick-nav-np{{ $manu->manu_id }}">
        <!-- product -->
        @foreach(${'newproduct'.$manu->manu_id} as $value)
        <div class="product-item women">
            <div class="product discount product_filter">
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
                <div class="product_info">{{ $value->manufacturers->manu_name }}
                    <h6 class="product_name"><a
                            href="{{ url('/products/'.$value->product_id.'/'.$value->manu_id) }}">{{ $value->product_name }}</a>
                    </h6>
                    <?php if ($value->sale > 0) { ?>
                    <h6 class="product_price">
                        {{ number_format($value->price - ($value->price * $value->sale / 100)) . "đ " }}<del
                            class="product-old-price">{{ number_format($value->price)."đ" }}</del>
                    </h6>
                    <?php } else { ?>
                    <h6 class="product_price">{{ number_format($value->price)."đ" }}</h6>
                    <?php } ?>
                </div>
            </div>
            <div class="red_button add_to_cart_button"><a href="{{ url('/carts/add/'.$value->product_id) }}">
                    </i> add to cart</button>
                </a></div>
        </div>
        @endforeach
        <!-- /product -->
    </div>
    <div id="slick-nav-np{{ $manu->manu_id }}" class="products-slick-nav"></div>
</div>
<!-- /tab -->
@endforeach
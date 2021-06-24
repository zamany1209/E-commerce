<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>eCommerce HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
            @livewireStyles
   </head>

   <body>
    @livewire('header')
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{ asset('') }}assets/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>product list</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- product list part start-->
    <section class="latest-product-area padding-bottom">
        <section class="product_list section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product_sidebar">
                            <div class="single_sedebar">
                                <form action="#">
                                    <input type="text" name="#" placeholder="Search keyword">
                                    <i class="ti-search"></i>
                                </form>
                            </div>
                            <div class="single_sedebar">
                                <div class="select_option">
                                    <div class="select_option_list">
                                    @if(isset($category_id))
                                        {{ $category_id }}
                                    @else
                                        category
                                    @endif
                                     <i class="right fas fa-caret-down"></i> </div>
                                    <div class="select_option_dropdown">
                                        @foreach ($category as $categorys)
                                            <p><a href="{{ asset('') }}product-list/{{ $categorys->name }}">{{ $categorys->name }}</a></p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="single_sedebar">
                                <div class="select_option">
                                    <div class="select_option_list">
                                        @if(isset($sort))
                                            {{ $sort }}
                                        @else
                                            Type
                                        @endif
                                        <i class="right fas fa-caret-down"></i> </div>
                                    <div class="select_option_dropdown">
                                        @if(isset($category_id))
                                            <p><a href="{{ asset('') }}product-list/{{ $category_id }}?sort=high_low">high_low</a></p>
                                            <p><a href="{{ asset('') }}product-list/{{ $category_id }}?sort=low_high">low_high</a></p>
                                        @else
                                        <p><a href="{{ asset('') }}product-list?sort=high_low">high_low</a></p>
                                        <p><a href="{{ asset('') }}product-list?sort=low_high">low_high</a></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="product_list">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        @foreach ($product as $products)
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="single-product mb-60">
                                                <div class="product-img">
                                                    <img src="{{ asset('') }}product/{{ $products->url_img }}" alt="">
                                                    @if ($products->new == "1")
                                                        <div class="new-product">
                                                            <span>New</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="product-caption">
                                                    <div class="product-ratting">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star low-star"></i>
                                                        <i class="far fa-star low-star"></i>
                                                    </div>
                                                    <h4><a href="{{ asset('') }}product/{{ $products->id+524 }}">{{ $products->name }}</a></h4>
                                                    <div class="price">
                                                        <ul>
                                                            <li>{{ $products->price }}</li>
                                                            <li class="discount">{{ $products->price_discount }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="load_more_btn text-center">
                                <div class="bd-example">
                                    <nav aria-label="Standard pagination example">
                                        <ul class="pagination">
                                            @if(isset($sort))
                                                {!! $product->appends(['sort' => $sort])->links(); !!}
                                            @else
                                                {!! $product->links(); !!}
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- product list part end-->

    @livewire('footer')
        @livewireScripts
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('./assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('./assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('./assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('./assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('./assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('./assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('./assets/js/slick.min.js') }}"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('./assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('./assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('./assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('./assets/js/jquery.sticky.js') }}"></script>

        <!-- contact js -->
        <script src="{{ asset('./assets/js/contact.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('./assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('./assets/js/jquery.ajaxchimp.min.js') }}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('./assets/js/plugins.js') }}"></script>
        <script src="{{ asset('./assets/js/main.js') }}"></script>

    </body>
</html>

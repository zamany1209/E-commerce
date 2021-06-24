    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
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
                                    <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                                    <div class="select_option_dropdown">
                                        <p><a wire:click="category_1">Category 1</a></p>
                                        <p><a href="#">Category 2</a></p>
                                        <p><a href="#">Category 3</a></p>
                                        <p><a href="#">Category 4</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single_sedebar">
                                <div class="select_option">
                                    <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                                    <div class="select_option_dropdown">
                                        <p><a href="#">Type 1</a></p>
                                        <p><a href="#">Type 2</a></p>
                                        <p><a href="#">Type 3</a></p>
                                        <p><a href="#">Type 4</a></p>
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
                                                    <img src="product/{{ $products->url_img }}" alt="">
                                                    @if ($products->new == "on")
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
                                                    <h4><a href="product/{{ $products->id+524 }}">{{ $products->name }}</a></h4>
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
                                <a href="#" class="btn_3">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- product list part end-->

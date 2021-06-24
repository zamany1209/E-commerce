    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{ asset('assets/img/hero/category.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>product Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="product_img_slide owl-carousel">
            <div class="single_product_img">
              <img src="{{ asset('') }}product/{{ $product->url_img }}" alt="#" class="img-fluid">
            </div>
            @foreach ($url_img as $img)
            <div class="single_product_img">
              <img src="{{ asset('') }}product/{{ $img->url }}" alt="#" class="img-fluid">
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-lg-12">
          <div class="single_product_text text-center">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <div class="row">
                <div class="col-lg-12">
                  <div class="order_details_iner">
                    <h3>Product Details</h3>
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col" colspan="2">Details</th>
                          <th scope="col">Details</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($details as $detailse)
                            <tr>
                                <th colspan="2"><span>{{ $detailse->name }}</span></th>
                                <th> <span>{{ $detailse->description }}</span></th>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             @livewire('add-to-cart', ['price' => $product->price , 'product_id' => $product->id ] , key($product->id))
          </div>
        </div>
      </div>
    </div>
  </div>
  @livewire('comments', ['product_id' => $product->id ] , key($product->id))
  @livewire('news')

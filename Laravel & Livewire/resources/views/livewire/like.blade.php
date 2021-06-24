<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Like List</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- slider Area End-->

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">price_discount</th>
                <th scope="col">Quantity</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($product as $products)
                    @livewire('like-item', ['products' => $products], key($products->id))
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->

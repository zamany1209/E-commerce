<div>
    @foreach ($product as $product)
    <div class="container">
        <div class="col-lg-12 text-center">
            <img class="col-3 shadow" src="{{ asset('') }}product/{{ $product->url_img }}">
        </div>
    </div>
    <div class="order_details_iner mt-3">
        <h3 class="text-center mb-3">Your Product</h3>
        <table class="table table-borderless">
          <thead>
            <tr>
            </tr>
          </thead>
            <form action="{{ route('admin.Edite_Product') }}" enctype="multipart/form-data" method="POST">
                @if(Session::get('success'))
                <p>{{ Session::get('success') }}</p>
                @endif
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="orginal_image" value="{{ $product->url_img }}">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="name" value="{{ $product->name }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="description" value="{{ $product->description }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="category" value="{{ $product->category }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputPassword" name="image">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword" name="price" value="{{ $product->price }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Price Discount</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputPassword" name="price_discount" value="{{ $product->price_discount }}">
                    </div>
                </div>
                <div class="col-auto mt-3">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                </div>
            </form>
        </table>
      </div>
      @endforeach
</div>

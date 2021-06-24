<div>
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">URL</th>
                        <th scope="col">description</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($image as $images)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                        <img src="{{ asset('') }}product/{{ $images->url }}" alt="" width="40px" height="40px" />
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <h5>{{ $images->description }}</h5>
                                </td>
                                <td>
                                <div class="product_count">
                                    <a href="#" wire:click.prevent="removeImage({{$images}})">Delete</a>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
  <!--================End Cart Area =================-->
  <hr>
  @if(Session::get('success'))
  <p>{{ Session::get('success') }}</p>
  @endif
  <form class="form p-3" action="{{ route('admin.Create_Image_Product') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $id_product }}">
    <span>@error('product_id') {{ $message }} @enderror</span>
    <div class="mb-3">
        <label for="formFile" class="form-label">Image Product</label>
        <input class="form-control" type="file" name="image" id="formFile" multiple>
        {{-- <input class="form-control" type="text" name="image" id="formFile"> --}}
        <span>@error('image') {{ $message }} @enderror</span>
    </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="description" id="description" placeholder="description">
        <label for="description">description</label>
        <span>@error('description') {{ $message }} @enderror</span>
    </div>
    <div class="col-auto mt-3">
        <button type="submit" class="btn btn-primary mb-3">Save</button>
    </div>
  </form>
</div>

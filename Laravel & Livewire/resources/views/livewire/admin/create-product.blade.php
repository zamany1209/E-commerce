<div>
    <div>
        @if(Session::get('Success'))
            {{ Session::get('Success') }}
        @endif
    </div>
    <div class="col-6 container">
        <form action="{{ route('admin.Create_Product') }}" enctype="multipart/form-data" method="POST">
        @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name_product" placeholder="name">
                <label for="name_product">Name</label>
                <span>@error('name') {{ $message }} @enderror</span>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="description" id="description" placeholder="description">
                <label for="description">description</label>
                <span>@error('description') {{ $message }} @enderror</span>
            </div>
            <div class="mt-3">
                <select name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Category</option>
                    @foreach ($category as  $group)
                    <option value="{{ $group->name }}">{{ $group->name }}</option>
                    @endforeach
                </select>
                <span>@error('category') {{ $message }} @enderror</span>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="new" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Your Product New</label>
                <span>@error('new') {{ $message }} @enderror</span>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="featured" id="flexSwitchCheckCheckeds" checked>
                <label class="form-check-label" for="flexSwitchCheckCheckeds">Your Product featured</label>
                <span>@error('featured') {{ $message }} @enderror</span>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image Product</label>
                <input class="form-control" type="file" name="image" id="formFile" multiple>
                {{-- <input class="form-control" type="text" name="image" id="formFile"> --}}
                <span>@error('image') {{ $message }} @enderror</span>
            </div>
            <div class="form-floating">
                <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                <label for="price">Price</label>
                <span>@error('price') {{ $message }} @enderror</span>
            </div>
            <div class="form-floating mt-3">
                <input type="number" class="form-control" name="pricediscount" id="pricediscount" placeholder="PriceDiscount">
                <label for="pricediscount">PriceDiscount</label>
            </div>
            <div class="col-auto mt-3">
                <button type="submit" class="btn btn-primary mb-3">Save</button>
            </div>
        </form>
    </div>
</div>


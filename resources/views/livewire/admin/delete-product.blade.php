<div>
    <div class="container">
        <div class="col-lg-12 text-center">
            <img class="col-3 shadow" src="{{ asset('') }}product/{{ $product->url_img }}">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <p>{{ $product->category }}</p>
            <form>
                <input type="hidden" name="id" value="{{ $product->id }}"/>
                <input type="submit" class="btn btn-danger p-3" value="Delete"/>
            </form>
        </div>
    </div>
</div>

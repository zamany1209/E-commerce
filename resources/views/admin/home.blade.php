<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<h2>Admin Page</h2>
    <div>
    @if ($message)
        {{ $message }}
    @endif
        @if(Session::get('Success'))
            {{ Session::get('Success') }}
        @endif
    </div>
    <div class="col-6 container">
        <form action="{{ route('create_product') }}" enctype="multipart/form-data" method="POST">
        @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name_product" placeholder="name">
                <label for="name_product">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="description" id="description" placeholder="description">
                <label for="description">description</label>
            </div>
            <div class="mt-3">
                <select name="details" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Category</option>
                    @foreach ($category as  $group)
                    <option value="{{ $group->name_en }}">{{ $group->name_fa }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="new" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Your Product New</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image Product</label>
                <input class="form-control" type="file" name="img" id="formFile">
                <input class="form-control" type="text" name="image" id="formFile">
            </div>
            <div class="form-floating">
                <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                <label for="price">Price</label>
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
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

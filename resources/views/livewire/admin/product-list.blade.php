<div>
    <h2>Section title</h2>
    <div class="table-responsive">
    <table class="table table-striped table-sm text-center">
        <thead>
        <tr>
            <th>#</th>
            <th>Header</th>
            <th>Featured</th>
            <th>New</th>
            <th>Price</th>
            <th>Edite</th>
            <th>List Image</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($product as $products)
                <tr>
                    <td>{{ $products->id }}</td>
                    <td>{{ $products->name }}</td>
                    <td>@livewire('admin.product-featured', ['products' => $products ] , key($products->id))</td>
                    <td> @livewire('admin.product-new', ['products' => $products ] , key($products->id))</td>
                    <td>{{ $products->price}}</td>
                    <td><a href="{{ asset('admin/edite-product') }}/{{ $products->id }}" class="btn btn-warning p-1">Edite</a></td>
                    <td><a href="{{ asset('admin/list-image') }}/{{ $products->id }}" class="btn btn-info p-1">Image</a></td>
                    <td><a href="{{ asset('admin/delete-product') }}/{{ $products->id }}"  class="btn btn-danger p-1">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>

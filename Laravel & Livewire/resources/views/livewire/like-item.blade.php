<tr>
    <td>
    <div class="media">
        <div class="d-flex">
        <img src="product/{{ $products->url_img }}" alt="" />
        </div>
        <div class="media-body">
        <p>{{ $products->name }}</p>
        </div>
    </div>
    </td>
    <td>
    <h5>{{ $products->price }}</h5>
    </td>
    <td>
        <h5 style="color: red;">{{ $products->price_discount }}</h5>
    </td>
    <td>
    <div class="product_count">
        <button class="btn" wire:click="LikeDeleted">delete</button>
    </div>
    </td>
</tr>

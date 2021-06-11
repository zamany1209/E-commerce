<?php

namespace App\Http\Livewire;

use App\Models\News;
use App\Models\Product as ModelsProduct;
use App\Models\ProductImg;
use Illuminate\Http\Request;
use Livewire\Component;

class Product extends Component
{
    public $url;
    public $product;
    public $url_img;
    public $email;
    public function mount(Request $request)
    {
        $this->url = $request->url-524;
        $this->product = ModelsProduct::where('id', '=', $this->url)->first();
        $this->url_img = ProductImg::where('product_id', '=', $this->product->id)->get();
    }
    public function render()
    {
        return view('livewire.product');
    }
}

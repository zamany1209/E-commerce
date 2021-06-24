<?php

namespace App\Http\Livewire;

use App\Models\Like as ModelsLike;
use App\Models\Product;
use Livewire\Component;

class Like extends Component
{
    public $product;
    public function mount()
    {
        if(session()->has('loggedUser'))
        {
            $this->product = ModelsLike::join('products' , 'product_id' , '=' , 'products.id')->select('product_like.id', 'products.name' , 'products.price' , 'products.price_discount' ,'products.url_img')->get();
        }
        else
        {
            return redirect('login');
        }
    }
    public function render()
    {
        return view('livewire.like');
    }
}

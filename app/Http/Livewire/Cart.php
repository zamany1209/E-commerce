<?php

namespace App\Http\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\Product;
use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public $product;
    public function mount()
    {
        if(session('loggedUser'))
        {
            $this->cart = ModelsCart::join('products','products.id', '=', 'cart.product_id')->where('cart.user_id', '=', session('loggedUser'))->select('products.name','products.price','products.id','products.url_img')->get();
        }
        else
        {
            return redirect('login');
        }
    }
    public function render()
    {
        return view('livewire.cart');
    }
}

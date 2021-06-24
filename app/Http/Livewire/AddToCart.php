<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class AddToCart extends Component
{
    public $number = 1;
    public $price;
    public $product_id;
    public $fe_price;
    public function plus()
    {
        $plus = $this->number+1;
        $this->number = $plus;
        $this->fe_price = $this->price*$this->number;
    }
    public function minus()
    {
        if($this->number > 1)
        {
        $plus = $this->number-1;
        $this->number = $plus;
        $this->fe_price = $this->price*$this->number;
        }
    }
    public function Add_to_cart()
    {
        if(session()->has('loggedUser'))
        {
            if(Cart::where('product_id' ,'=', $this->product_id)->where('user_id', '=', session('loggedUser'))->first())
            {
                return back()->with('error_cart', 'قبلا به سبد خرید اضافه شده است');
            }
            else
            {
                $add_cart = Cart::create([
                    'product_id' => $this->product_id,
                    'user_id' => session('loggedUser')
                ]);
            }
        }
        else
        {
            return back()->with('error_cart', 'لطفا ابتدا وارد حساب کاربری خود شوید');
        }
    }
    public function mount()
    {
        $this->fe_price = $this->price*$this->number;
    }
    public function render()
    {
        return view('livewire.add-to-cart');
    }
}

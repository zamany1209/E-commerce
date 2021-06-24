<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\User;
use Livewire\Component;

class Header extends Component
{
    public $user;
    public $cartItem = 0;
    public function mount()
    {
        if(session()->has('loggedUser'))
        {
            $this->user = User::where('id', '=', session('loggedUser'))->first();
            $this->cartItem = Cart::where('user_id',session('loggedUser'))->count();
        }
    }
    public function render()
    {
        return view('livewire.header');
    }
}

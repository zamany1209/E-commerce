<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public $user;
    public $product;
    public function mount()
    {
        $this->user = User::all()->count();
        $this->product = Product::all()->count();
    }
    public function render()
    {
        return view('livewire.admin.home');
    }
}

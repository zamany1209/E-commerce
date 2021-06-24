<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $product;
    public function mount()
    {
        $this->product = Product::all();
    }
    public function render()
    {
        return view('livewire.admin.product-list');
    }
}

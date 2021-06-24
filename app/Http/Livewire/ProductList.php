<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $product;
    public $pagination = 16;
    public function category_1()
    {
        $this->product = Product::where('details' , '=' , 'des')->take($this->pagination)->skip(0)->get();
    }
    public function mount()
    {
        $this->product = Product::all()->take($this->pagination)->skip(0);
    }
    public function render()
    {
        return view('livewire.product-list');
    }
}

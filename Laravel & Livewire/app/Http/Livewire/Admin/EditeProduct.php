<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class EditeProduct extends Component
{
    public $id_product;
    public $product;
    public function mount($id_product)
    {
        $this->id_product = $id_product;
        $this->product = Product::where('id', '=' , $this->id_product)->get();
    }
    public function render()
    {
        return view('livewire.admin.edite-product');
    }
}

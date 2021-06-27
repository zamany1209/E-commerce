<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class DeleteProduct extends Component
{
    public $product;
    public function mount($id_product)
    {
        $this->product = Product::find($id_product);
    }
    public function render()
    {
        return view('livewire.admin.delete-product');
    }
}

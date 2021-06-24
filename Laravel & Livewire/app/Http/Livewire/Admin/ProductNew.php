<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductNew extends Component
{
    public $new;
    public $products;
    public function mount(Product $products)
    {
        $this->products = $products;
        $this->new = $this->products->new;
    }
    public function updatedNew($value)
    {
        $this->products->update([
            'new' => $value
        ]);
    }
    public function render()
    {
        return view('livewire.admin.product-new');
    }
}

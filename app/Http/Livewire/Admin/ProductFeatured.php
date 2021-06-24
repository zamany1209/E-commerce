<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductFeatured extends Component
{
    public $featured;
    public $products;
    public function mount(Product $products)
    {
        $this->products = $products;
        $this->featured = $this->products->featured;
    }
    public function updatedFeatured($value)
    {
        $this->products->update([
            'featured' => $value
        ]);
    }
    public function render()
    {
        return view('livewire.admin.product-featured');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductListItem extends Component
{
    public $products;
    public $new;
    public function mount(Product $products)
    {
        $this->products = $products;
        $this->new = $this->products->new;
    }
    public function up_new()
    {
        $this->products->update([
            'new' => $this->new
        ]);
    }
    // public function updatedNew($value)
    // {
    //     $this->products->update([
    //         'new' => $value
    //     ]);
    // }
    public function render()
    {
        return view('livewire.admin.product-list-item');
    }
}

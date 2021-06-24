<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CreateProduct extends Component
{
    public $category;
    public function mount()
    {
        $this->category = Category::all();
    }
    public function render()
    {
        return view('livewire.admin.create-product');
    }
}

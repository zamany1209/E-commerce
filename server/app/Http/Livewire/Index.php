<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $number = 2;
    public function plas()
    {
        $this->number++;
    }
    public $product;
    public function mount()
    {
        $this->product = Product::where('new', "on")->get();
    }
    public $input_1;
    public $input_2;
    public $input_3;
    public $input_4;
    public $input_5;
    public function save()
    {

    }
    public function render()
    {
        return view('livewire.index');
    }
}

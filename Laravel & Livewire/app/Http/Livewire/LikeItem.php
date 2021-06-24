<?php

namespace App\Http\Livewire;

use App\Models\Like;
use Livewire\Component;

class LikeItem extends Component
{
    public $products;
    public function LikeDeleted()
    {
        $this->products->delete();
        return redirect('like');
    }
    public  function mount(Like $products)
    {
        $this->products = $products;
    }
    public function render()
    {
        return view('livewire.like-item');
    }
}

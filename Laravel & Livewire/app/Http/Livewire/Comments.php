<?php

namespace App\Http\Livewire;

use App\Models\Comments as ModelsComments;
use Livewire\Component;

class Comments extends Component
{
    public $id_product;
    public $comment;
    public function mount()
    {
        $this->comment = ModelsComments::where('product_id' , '=' , $this->id_product)->get();
    }
    public function render()
    {
        return view('livewire.comments');
    }
}

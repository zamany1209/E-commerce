<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comments as ModelsComments;
use Illuminate\Support\Facades\DB;

class Comments extends Component
{
    public $product_id;
    public $comment;
    public $comment_total;
    public $family_comment;
    public $comment_id;
    protected $listeners = [
        'reply'
    ];
    public function reply($comment)
    {
        $this->family_comment = $comment["family"];
        $this->comment_id = $comment["id"];
    }
    public function mount()
    {
        $this->comment_total = ModelsComments::where('product_id' , '=' , $this->product_id)->where('confirmed' , '=' , "1")->count();
        $this->comment = ModelsComments::where('product_id' , '=' , $this->product_id)->where('confirmed' , '=' , "1")->get();
    }
    public function render()
    {
        return view('livewire.comments');
    }
}

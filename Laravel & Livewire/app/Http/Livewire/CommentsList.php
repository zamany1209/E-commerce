<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommentsList extends Component
{
    public $comments;
    public $reply;
    public function reply_comment()
    {
    }
    public function render()
    {
        return view('livewire.comments-list');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News as ModelsNews;

class News extends Component
{
    public $email;
    public function save_email_news()
    {
        $this->validate([
            'email' => 'required|unique:news',
        ], [
            'email.unique' => 'ایمیل شما قبلا ثبت شده است',
            'email.required' => 'لطفا فیلد را پر کنید',
        ]);
        $todo = ModelsNews::create([
            'email' => $this->email
        ]);
        $this->email = "";
    }
    public function render()
    {
        return view('livewire.news');
    }
}

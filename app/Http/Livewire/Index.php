<?php

namespace App\Http\Livewire;

use App\Models\News;
use App\Models\User;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public $product;
    public $email;
    public function save_email_news()
    {
        $this->validate([
            'email' => 'required|unique:news',
        ], [
            'email.unique' => 'ایمیل شما قبلا ثبت شده است',
            'email.required' => 'لطفا فیلد را پر کنید',
        ]);
        $todo = News::create([
            'email' => $this->email
        ]);
    }
    public function mount()
    {
        $this->product = Product::where('featured', '1')->take(18)->inRandomOrder()->get();
    }
    public function render()
    {
        return view('livewire.index');
    }
}

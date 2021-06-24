<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public $user;
    public function mount()
    {
        if(session()->has('loggedUser'))
        {
            $this->user = User::where('id', '=', session('loggedUser'))->first();
        }
        else
        {
            return redirect('login');
        }
    }
    public function render()
    {
        return view('livewire.profile');
    }
}

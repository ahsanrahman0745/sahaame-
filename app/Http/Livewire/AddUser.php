<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AddUser extends Component
{
    public $email = '';
    public $name = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function mount()
    {
        // if (auth()->user()) {
        //     return redirect()->intended('/dashboard');
        // }
    }

    public function updatedEmail()
    {
        $this->validate(['email'=>'required|email:rfc,dns|unique:users']);
    }
    
    public function register()
    {
   
        // $this->validate([
        //     'email' => 'required',
        //     'password' => 'required|same:passwordConfirmation|min:6',
        // ]);

        $user = User::create([
            'first_name' =>$this->name,
            'email' =>$this->email,
            'password' => Hash::make($this->password),
            'role'=>'edt',
            'remember_token' => Str::random(10),
        ]);


        return redirect('/add_user');
    }
    public function render()
    {
        return view('backend.livewire.add-user');
    }
}
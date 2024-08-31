<?php

namespace App\Livewire;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|max:255',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password), // Encrypt the password
        ]);

        Auth::login($user);

        session()->flash('success', 'Registration successful');
        return redirect('/customers'); // Correct redirect
    }
}

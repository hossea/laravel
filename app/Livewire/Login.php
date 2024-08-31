<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }
    public function loginUser(Request $request)
    {
        $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('success', 'Login successful');
            
            return $this->redirect('/customers', navigate:true);

        } else {
            session()->flash('error', 'Invalid credentials');
        }
    }
}

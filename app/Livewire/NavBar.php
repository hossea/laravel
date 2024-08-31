<?php

namespace App\Livewire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavBar extends Component
{
    public function render()
    {
        return view('livewire.nav-bar');
    }
    public function logout(Request $request)
    {
       Auth::Logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       session()->flash('success', 'Logged out');
       return $this->redirect('/login', navigate:true);
    }
}

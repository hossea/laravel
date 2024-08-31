<?php

namespace App\Livewire;
use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name='';
    public $email='';
    public $phone='';

    public function save(){
        $this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:customers',
            'phone'=>'required|unique:customers|max:255',
        ]);
        Customer::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'phone'=>$this->phone
        ]);
        $this->name='';
        $this->email='';
        $this->phone='';
    }

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function createCustomer(){
        $validated=$this->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:customers',
            'phone'=>'required|unique:customers|max:255',
        ]);
        
        Customer::create($validated);
        session()->flash('success', 'Customer created successfully');
        return $this->redirect('/customers', navigate:true);
    }
}

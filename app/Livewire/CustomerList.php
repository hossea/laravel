<?php

namespace App\Livewire;
use App\Models\Customer;
use Livewire\Component;

class CustomerList extends Component
{
    public $customers = [];
    public $search='';

    public function mount()
    {
        $this->customers = Customer::all(); // Fetch all customers from the database
    }
    public function render()
    {
        $this->customers = Customer::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.customers', ['customers' => $this->customers]);
    }
    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();
        session()->flash('success', 'Customer deleted successfully');
        return $this->redirect('/customers', navigate:true);
    }
}


<?php

namespace App\Http\Livewire;

use App\Models\TicketModel;
use Livewire\Component;

class TicketForm extends Component
{

    public $name;
    public $price;
    protected $rules = [
        'name' => 'required|min:6',
        'price' => 'required',
    ];


    public function render()
    {
        return view('livewire.ticket-form');
    }

    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        TicketModel::create([
            'name' => $this->name,
            'price' => $this->price,
        ]);
        session()->flash('message', 'Successfully Added');
    }
}

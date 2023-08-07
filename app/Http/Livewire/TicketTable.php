<?php

namespace App\Http\Livewire;

use App\Models\TicketModel;
use Livewire\Component;

class TicketTable extends Component
{

    public $ticket;

    public function LoadData(){
        $this->ticket = TicketModel::orderBy('id', 'asd')->get();
    }
    public function render()
    {
        $this->ticket = TicketModel::orderBy('id', 'desc')->get();
        return view('livewire.ticket-table');
    }
}

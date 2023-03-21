<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class RefuseOrder extends Component
{


    public function RefuseOrder()
    {
        
        if (Session::has('order')) {
            Session::put('order', null);
        }
        
        $this->emit('orderRemoved');
        // $this->emit('orderR');

    }
    public function render()
    {
        return view('livewire.refuse-order');
    }
}

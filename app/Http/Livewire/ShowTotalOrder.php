<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Meals;
use Illuminate\Support\Facades\Session;

class ShowTotalOrder extends Component
{
    protected $listeners = ['RemoveItem' => '$refresh','orderRemoved' => '$refresh','mealAdded' => '$refresh'];

    public function render()
    {
        // 
        $array_of_data = [];
        // dd('sdfsdf');

        $data_of_session = Session::get('order') ;

        if ($data_of_session) {
            foreach ($data_of_session as $value) {
                array_push($array_of_data, $value);
            }
        }
        // 
        $data = Meals::whereIn('id', $array_of_data)->get();
        // get total to price
        $total = 0;
        foreach ($data as $value) {
            $total += $value->price;
            
        }
        return view('livewire.show-total-order', ["total" => $total]);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sections;
use App\Models\Meals;
use Yajra\DataTables\Html\Editor\Fields\Number;
use Illuminate\Support\Facades\Session;

class UserShowOrder extends Component
{

    protected $listeners = ['orderRemoved' => '$refresh','mealAdded' => '$refresh'];
    // protected $listener = ['RemoveItem' => '$refresh'];

    public function RomoveItem($id)
    {
        // dd($id);
        // put all data of session in new item 
        $x = Session::get('order');
        // create new array 
        $arrays = [];
        // looping for all data and put it in new array if it is not == the id 
        foreach ($x as  $value) {
            // dd($value);
            if ($value !== $id) {
                // push data in to new array 
                array_push($arrays,$value);
            }
        }
      // put the new array in to the array aging
      Session::put('order',$arrays);
    // Add event to anther page if user remove  item
        $this->emit('RemoveItem');
    }
    
    public function render()
    {
        // create new array  
        $array_of_data = [];
        // put all data of session in to the new array
        $array_of_data = Session::get('order');

       if(isset($array_of_data[0])){
            // get data of db with id  where id == the new array above
            $data = Meals::whereIn('id', $array_of_data)->get();
       }else {
            $data = null;
       }

        // return all data to view
        return view('livewire.user-show-order', ["Data" => $data]);
    }

}
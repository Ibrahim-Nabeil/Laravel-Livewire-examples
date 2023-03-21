<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sections;
use Illuminate\Support\Facades\Session;
use Symfony\Component\CssSelector\Parser\Handler\NumberHandler;

class UserAddMeal extends Component
{
    public function AddAitem($id)
    {
    //#######################
        if (isset($id)) {
// Session
            if (Session::has('order')) {
                $arraysf       = Session::get('order');
                $count = count(Session::get('order'));
                $arraysf[$count] = $id;
                session()->put('order',$arraysf);
            } else {
                $arrays = [];
                $arrays[0] = $id;
                session()->put('order',$arrays);
            }
        }

        $this->emit('mealAdded');

    }
    public function render()
    {
        $data = Sections::all();
        return view('livewire.user-add-meal', ["Data" => $data]);


    }

}
//#######################

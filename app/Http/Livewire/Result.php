<?php

namespace App\Http\Livewire;
use App\Models\Post;

use Livewire\Component;

class Result extends Component

{
    public $inputeValue ;
    public $returnValue ;
    // public $orderRemoved ;
    protected $listeners = ['To'];

    public function render()
    {
        // $data = collect($this->inputeValue);
        return view('livewire.result', ['returnValue'=>$this->returnValue]);

    }

    
//     public function To($data){
//         // dd($data);
//         $this->inputeValue == $data;
//             if ($this->inputeValue == null) {
//                 $this->returnValue = [];
//                 // $this->emit('search');
//                 // $this->refresh();
//             } else {
//                 $searchValue = trim($data);
//                 $complet = Post::where('title','LIKE',"%$searchValue%")->get();
//                 $this->returnValue = $complet;

//             }
            
//             // $this->emit('search');

//     }
//     public function refresh(){


//             $this->emit('search');


// }
}

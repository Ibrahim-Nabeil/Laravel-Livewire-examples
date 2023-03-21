<?php

namespace App\Http\Livewire;
use App\Models\Post;

use Livewire\Component;

class SercheUsingLivewire extends Component

{
    public $inputeValue ;
    public $returnValue ;

    public function render()
    {
        $searchValue = trim($this->inputeValue);

            if ($this->inputeValue == null || $this->inputeValue == " ") {
                $this->returnValue = [];
            } else {
                $complet = Post::where('title','LIKE',"%".trim($searchValue)."%")->get();
                $this->returnValue = $complet;
            }

        return view('livewire.serche-using-livewire', ['returnValue'=>$this->returnValue]);

    }

}

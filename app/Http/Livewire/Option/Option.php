<?php

namespace App\Http\Livewire\Option;

use Livewire\Component;

class Option extends Component
{
    public function render()
    {
                // $sections = Section::pluck('section_name')->toArray();
                // $sections = Section::all();
                $sections = [
                    "fgdfg",
                    "logdfgdfgdin",
                    "logdfgfdgin",
                    "logdfgfdgin",
                ];
                // dd($sections);
                return view('livewire.option.option',['sections'=>$sections]);
    }
}

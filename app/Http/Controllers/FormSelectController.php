<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

use App\Models\Post;

class FormSelectController extends Controller
{

    public function formSelect()
    {

            return view('form-select');
        
        


    }
}
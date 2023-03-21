<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;
use App\Models\Sections;

class WelcomeController extends Controller
{
    public function index()
    {
        //
        $data = Sections::paginate(10);

        return view("welcome",["Data"=>$data]);
    }
}

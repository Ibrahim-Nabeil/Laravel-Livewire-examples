<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

use App\Models\User;

class ExampleBlockUsersWitheLivewireController extends Controller
{

    public function getAllUsers()
    {

            $users = User::paginate(10);
            return view('get-users', ['users'=>$users]);
        
        


    }
}
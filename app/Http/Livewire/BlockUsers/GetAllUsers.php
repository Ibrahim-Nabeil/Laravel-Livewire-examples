<?php

namespace App\Http\Livewire\BlockUsers;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class GetAllUsers extends Component
{
    use WithPagination;
    protected $listeners = ['userBlocked' => '$refresh','userUnBlocked' => '$refresh'];
protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $users  =  User::paginate(7);
        return view('livewire.block-users.get-all-users',['users'=>$users]);
        // return view('livewire.block-users.get-all-users');
    }
}

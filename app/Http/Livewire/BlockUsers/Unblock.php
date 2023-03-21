<?php

namespace App\Http\Livewire\BlockUsers;

use App\Models\User;
use Livewire\Component;

class Unblock extends Component
{
    public $user_id;

    public function unBlockUser()
    {
        // dd($this->user_id);

        $userId  =  User::find($this->user_id->id);
        $userId->role = 1;
        $userId->save();
        $this->emit('userUnBlocked');

        // return view('admin.admin-permission',['users'=>$users]);
    }
    public function render()
    {
        return view('livewire.block-users.unblock');
    }
}

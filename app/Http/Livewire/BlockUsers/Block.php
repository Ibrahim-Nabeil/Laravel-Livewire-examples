<?php

namespace App\Http\Livewire\BlockUsers;

use App\Models\User;
use Livewire\Component;

class Block extends Component
{
    public $user_id;

    public function render()
    {
        return view('livewire.block-users.block');
    }
    public function blockUser()
    {
        // dd($this->user_id->id);
        $userId  =  User::find($this->user_id->id);
        $userId->role = 5;
        $userId->save();
        // session()->flash('message', 'Post successfully updated.');
        $this->emit('userBlocked');
        // return view('admin.admin-permission',['users'=>$users]);
    }
}

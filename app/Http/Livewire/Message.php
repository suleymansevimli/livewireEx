<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Message extends Component
{

    public $messages;
    public $status = '';

    public function updatedSelectBox(){
        $this->messages = \App\Message::query()->where('sender_user_id','=',auth()->user()->id)->get()->toArray();
    }

    public function delete($id){
        User::query()->where('id',$id)->delete();
        $this->status = 'deleteOk';
    }

    public function updatedStatus(){
        $this->status = 'deleteOk';
    }

    public function render()
    {
        $allUsers = User::all();
        return view('livewire.message',compact('allUsers'));
    }
}

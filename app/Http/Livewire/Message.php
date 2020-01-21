<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Message extends Component
{

    public $messages;
    public $SelectBox;

    public function updatedSelectBox(){
        $this->messages = \App\Message::query()->where('sender_user_id','=',auth()->user()->id)->get()->toArray();
    }

    public function render()
    {
        $allUsers = User::all();
        return view('livewire.message',compact('allUsers'));
    }
}

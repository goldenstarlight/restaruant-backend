<?php

namespace App\Http\Livewire\Portal;


use Livewire\Component;
use App\Models\User;
use App\Models\Message;

class Chats extends Component
{

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();

        return ['status' => 'Message Sent!'];
    }

    public function render()
    {
        $users = User::all();

        return view('livewire.portal.chats.index', compact('users'));
    }
}

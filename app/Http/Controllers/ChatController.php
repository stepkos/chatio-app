<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller {

    public function index() {
        
        // Zobacz z kim ostatnim pisales
        $lastSent = auth()->user()->messagesSent()->latest()->first() ?? null;
        $lastRecived = auth()->user()->messagesReceived()->latest()->first() ?? null;
        

        // jesli jeszcze z nikim nie pisales wez konfe z kim kolwiek
        if ($lastSent == null || $lastRecived == null) {
            $tmpId = User::first()->id;
            return redirect("/chat/$tmpId");
        }

        $tmpId = $lastRecived['user_sender_id'];
        if ($lastRecived['updated_at'] > $lastSent['updated_at'])
            $tmpId = $lastSent['user_recipient_id'];
        
        return redirect("/chat/$tmpId");
    }
    
    public function show($chat) {
        
        $messagesSent = auth()->user()->messagesSent()->where('user_recipient_id', $chat)->get()->toArray();
        $messagesReceived = auth()->user()->messagesReceived()->where('user_sender_id', $chat)->get()->toArray();

        $messages = collect(array_merge($messagesSent, $messagesReceived))->sortBy('updated_at');

        $userID = auth()->user()->id;
        $users = User::all();
        $userRecipient = User::find($chat);
        return view('chat', compact('messages', 'userID', 'users', 'userRecipient'));
    }

    public function store(Request $request, $chat) {
        
        Message::create([
            'user_sender_id' => auth()->user()->id,
            'user_recipient_id' => $chat,
            'message' => $request->get('message')
        ]);

        return redirect("/chat/$chat");
    }
}

<?php

namespace App\Http\Controllers;
use App\admin;
use App\Notifications\sendMsg;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function chat(){
        
        return view('chat');
    }
    public function sendMessage(Request $request){
       $msg= $request->input('msg');
       $admin = new admin;
       $admin->notify(new sendMsg($request));
       return view('chat');

    }
}

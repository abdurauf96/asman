<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function saveConsult(Request $request)
    {

    	$message=new \App\Message();
    	$message->name=$request->name;
    	$message->phone=$request->phone;
    	$message->save();
    	return response()->json(['success']);
    }

    public function saveComment(Request $request)
    {
    	
    	$comment=new \App\Models\Comment();
    	$comment->username=$request->name;
    	$comment->body=$request->comment;
    	$comment->save();
    	
    }

    public function saveQuestion(Request $request)
    {
    	
    	$message=new \App\Message();
    	$message->name=$request->name;
    	$message->message=$request->message;
    	$message->phone=$request->phone;
    	$message->email=$request->email;
    	$message->save();
    	
    }

}

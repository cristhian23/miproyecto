<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    
    	$messages = Message::all(); 

    	//dd($messages);
    	return view('welcome',['messages'=>$messages] );
    }

    public function about(){
    	return view('about');
    }   	
}

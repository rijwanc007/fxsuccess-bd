<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Message;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Mail;
class ContactController extends Controller
{
    public function index(){
        return view('Front_End.contact-us');
    }

    public function store(Request $request){
       
       $message = new Message();
       $message->name = $request->name;
       $message->email = $request->email;
       $message->Phone = $request->Phone;
       $message->message = $request->message;
       $message->save();
        Mail::send('email',
        array(
            'name' => $request->name,
            'email' => $request->email,
            'Phone'=> $request->Phone,
            'user_message' => $request->message
        ), function($message)
    {
        $message->from('saquib.gt@gmail.com');
        $message->to('mahbubsprint310@gamil.com', 'Admin')->subject('Test Message');
    });
  
        return Redirect::to('/contact/')->with('message','Thanks for contacting with us');

       //dd($request->all());
    }
}

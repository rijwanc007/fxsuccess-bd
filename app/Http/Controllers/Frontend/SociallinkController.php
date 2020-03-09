<?php

namespace App\Http\Controllers\Frontend;
use Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class SociallinkController extends Controller
{
    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }


    public function handleLinkedinCallback()
    {
        
            $user = Socialite::driver('linkedin')->user();
            //return $user->id;
            Session::put('user_start',time()); 
            Session::put('user_name',$user->name);
            Session::put('user_id',$user->id);
            Session::put('user_email',$user->email);
            return Redirect::to('fxanaysis');
           
       
    }
}

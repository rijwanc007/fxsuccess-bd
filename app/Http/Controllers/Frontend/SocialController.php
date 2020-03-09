<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Events\ReviewAction;
use App\Comment;
use App\Articlecomment;
use App\Review;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class SocialController extends Controller
{  
    public function store(Request $request){
        $comments = new Comment();
        $comments->email = $request->email;
        $comments->name = $request->name;
        $comments->analysis_id = $request->analysis_id;
        $comments->comment = $request->comment;
        $comments->save();
        return response()->json($comments);
        return Redirect::to('/fxanaysis/'.$request->analysis_id);
       //dd($request->all());
        
    }
    public function storearticle(Request $request){
        $art_comments = new Articlecomment();
        $art_comments->email = $request->email;
        $art_comments->name = $request->name;
        $art_comments->article_id = $request->article_id;
        $art_comments->comment = $request->comment;
        $art_comments->save();
        return response()->json($art_comments);
        return Redirect::to('/test/'.$request->article_id);
       //dd($request->all());
        
    }
    public function storereview(Request $request){
        $reviews = new Review();
        $reviews->email = $request->email;
        $reviews->name = $request->name;
        $reviews->rating11 = $request->rating11;
        $reviews->comment = $request->comment;
        $reviews->brokerreview_id = $request->broker_id;
        $reviews->save();
       return response()->json($reviews);
       return Redirect::to('/broker-review/'. $request->broker_id);
    }

    public function actOnChirp(Request $request, $id)
    {
        $action = $request->get('action');
        switch ($action) {
            case 'Like':
                Review::where('id', $id)->increment('likes_count');
                break;
            case 'Unlike':
             Review::where('id', $id)->decrement('likes_count');
                break;
        }
        broadcast(new ReviewAction($id, $action))->toOthers();
        return '';
    }


    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        Session::put('user_start',time()); 
        Session::put('user_name',$user->name);
        Session::put('user_id',$user->name);
        Session::put('user_email',$user->email);
        return Redirect::to('fxanaysis');
    }
}

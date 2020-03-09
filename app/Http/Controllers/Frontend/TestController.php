<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brokerreview;
use DB;
use App\Article;
use App\Courses;
use App\Analysis;


class TestController extends Controller
{
    public function index(Request $request)
    {   
        
       $cat_Courses = DB::table('courses')
                    ->select('courses.id','courses.title as coursetitle','courses.cat_id','categories.id as categoryid','categories.title as categorytitle')
                    ->leftJoin('categories','courses.cat_id','=','categories.id')
                    ->get()->toArray(); 

        $newArr = [];
        foreach($cat_Courses as $course){
            $newArr[$course->categorytitle][$course->id]['title'] = $course->coursetitle;
            $newArr[$course->categorytitle][$course->id]['id'] = $course->id;
        }
        // $articles = Article::orderBy('id', 'DESC')->where('status','=',1)->paginate(1);
        //dd($articles);
        $recent_analysis = Analysis::orderBy('id', 'DESC')->limit(5)->get();
         $articles = Article::where('status','=',1)->where('soft_del','=','no')->orderBY('id','desc')->paginate(2);
         $show_popular = Analysis::popularDay()->take(4)->get();
         $first_broker = Brokerreview::where('position','=','first')->where('status','=','2')->take(1)->first();
         $second_broker = Brokerreview::where('position','=','second')->where('status','=','2')->take(1)->first();
         $third_broker = Brokerreview::where('position','=','third')->where('status','=','2')->take(1)->first();

     if ($request->ajax()) {

           return view('Front_End.partial', ['articles' => $articles])->render();  
         }  
        
 

        return view('Front_End.article.articlestest',compact('articles','newArr','recent_analysis','show_popular','first_broker','second_broker','third_broker'));
    }

    public function show($id)
    {
        $article_by_id = Article::find($id);
        $article_by_id->visit();
        $cat_Courses = DB::table('courses')
                    ->select('courses.id','courses.title as coursetitle','courses.cat_id','categories.id as categoryid','categories.title as categorytitle')
                    ->leftJoin('categories','courses.cat_id','=','categories.id')
                    ->get()->toArray(); 

        $newArr = [];
        foreach($cat_Courses as $course){
            $newArr[$course->categorytitle][$course->id]['title'] = $course->coursetitle;
            $newArr[$course->categorytitle][$course->id]['id'] = $course->id;
        }
        $recent_analysis = Analysis::orderBy('id', 'DESC')->limit(5)->get();
        $show_popular = Analysis::popularDay()->take(4)->get();

        $first_broker = Brokerreview::where('position','=','first')->where('status','=','2')->take(1)->first();
        $second_broker = Brokerreview::where('position','=','second')->where('status','=','2')->take(1)->first();
        $third_broker = Brokerreview::where('position','=','third')->where('status','=','2')->take(1)->first();

        return view('Front_End.article.article-detail',compact('article_by_id','newArr','recent_analysis','show_popular','first_broker','second_broker','third_broker'));
       
    }

}

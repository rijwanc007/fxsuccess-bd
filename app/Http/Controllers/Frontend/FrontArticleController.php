<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Article;
use App\Courses;

class FrontArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
       $articles = Article::paginate(1);
       $recent_analysis = Analysis::orderBy('id', 'DESC')->limit(5)->get();
       return view('Front_End.article.articlestest',compact('articles','newArr','recent_analysis'));
    }

    public function ajaxpaginat()
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
     $articles = Article::orderBy('id', 'DESC')->paginate(1);

        
        return view('Front_End.article.articlestest',compact('articles','newArr'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article_by_id = Article::find($id);
        $cat_Courses = DB::table('courses')
                    ->select('courses.id','courses.title as coursetitle','courses.cat_id','categories.id as categoryid','categories.title as categorytitle')
                    ->leftJoin('categories','courses.cat_id','=','categories.id')
                    ->get()->toArray(); 

        $newArr = [];
        foreach($cat_Courses as $course){
            $newArr[$course->categorytitle][$course->id]['title'] = $course->coursetitle;
            $newArr[$course->categorytitle][$course->id]['id'] = $course->id;
        }
        return view('Front_End.article.article-detail',compact('article_by_id','newArr'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

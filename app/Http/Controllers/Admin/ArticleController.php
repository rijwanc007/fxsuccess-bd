<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\Redirect;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::where('status','=',1)->where('soft_del','=','no')->orderBy('id', 'DESC')->get();
        return view('Admin.Article.manage_article',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Article.create_article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $articleimage = $request->file('image');
            $name = time().'.'.$articleimage->getClientOriginalExtension();
            $image_name =$articleimage->move(public_path().'/articleimages/', $name);
            $article = new Article();
            $article->title = $request->title;
            $article->postedby = $request->postedby;
            $article->image = $name;
            $article->description = $request->description;
            $article->status = $request->status;
            $article->articledate = date("F, j, Y");
            $article->save();
            return Redirect::to('article')->with('message','Article Created Susseccfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function softdelete($id)
    {
        $trash_data = Article::find($id);
        $trash_data->soft_del = 'ok';
        $trash_data->save();
        return Redirect::to('article')->with('message','Article was sent into trash Susseccfully');
    }
    public function restorearticle($id){
        $restore_data = Article::find($id);
        $restore_data->soft_del = 'no';
        $restore_data->save();
        return Redirect::to('article')->with('message','Article was restored Susseccfully');
    }
    public function showtrash(){
        $trash_article = Article::where('soft_del','=','ok')->get();
        return view('Admin.Article.trash',compact('trash_article'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article_by_id = Article::find($id);
        return view('Admin.Article.edit_article',compact('article_by_id'));
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
        $articleimage = $request->file('image');
        if (!empty($articleimage)){

        //$postimage= $request->file('imagename');
        $name = time().'.'.$articleimage->getClientOriginalExtension();
        $image_name =$articleimage->move(public_path().'/articleimages/', $name);
        $article = Article::find($id);
        $article->title = $request->title;
        $article->postedby = $request->postedby;
        $article->image = $name;
        $article->description = $request->description;
        $article->status = $request->status;
        $article->articledate = date("F, j, Y");
        $article->save();
        return Redirect::to('article')->with('message','Article Updated Susseccfully');

       } else {

           $article = Article::find($id);
           $article->title = $request->title;
            $article->postedby = $request->postedby;
            $article->description = $request->description;
            $article->status = $request->status;
            $article->articledate = date('F, j, Y');
            $article->save();
        return Redirect::to('article')->with('message','Article Updated Susseccfully');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $unlinkimage =  $article->image;
        unlink('articleimages/'.$unlinkimage);
        $article->delete();
        return Redirect::to('article')->with('message','Article Deleted Susseccfully');
    }
}

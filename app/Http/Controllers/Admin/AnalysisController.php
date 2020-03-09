<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Analysis;
use Illuminate\Support\Facades\Redirect;


class AnalysisController extends Controller
{
    public function index()
    {
        $analysis_data = Analysis::where('status','=',1)->where('soft_del','=','no')->orderBy('id', 'DESC')->get();
       return view('Admin.analysis.analysis_index',compact('analysis_data'));
    }
    public function create()
    {
        return view('Admin.analysis.create_analysis_post');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
           'title'=>'required',
           'published_by'=>'required',
           'image' =>'required|image',
           'description' =>'required',
           'status'=>'required'
        ]);
        $postimage= $request->file('image');
        $name = time().'.'.$postimage->getClientOriginalExtension();
        $image_name =$postimage->move(public_path().'/upload/images', $name);
        Analysis::create([
           'title'=>$request->title,
           'published_by'=>$request->published_by,
           'image'=>$name,
           'status'=>$request->status,
           'description'=>$request->description,
           'time_zone'=>date("F, j, Y")
        ]);
        return Redirect::to('analysis')->with('message','Analysis Created Susseccfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    public function edit($id)
    {
       $analysis_data = Analysis::find($id);
       return view('Admin.analysis.analysis_edit',compact('analysis_data'));
    }
    public function update(Request $request, $id)
    {
        $post_image = $request->file('image');
        $analysis_update_data = Analysis::find($id);
        if(!empty($post_image)){
            $name = time().'.'.$post_image->getClientOriginalName();
            $image_name =$post_image->move(public_path().'/upload/images',$name);
            $analysis_update_data->update([
                'title'=>$request->title,
                'published_by'=>$request->published_by,
                'image'=>$name,
                'status'=>$request->status,
                'description'=>$request->description,
                'time_zone'=>date("F, j, Y")
            ]);
            return Redirect::to('analysis')->with('message','Analysis Updataed Susseccfully');
        }else{
            $analysis_update_data->update([
                'title'=>$request->title,
                'published_by'=>$request->published_by,
                'status'=>$request->status,
                'description'=>$request->description,
                'time_zone'=>date("F, j, Y")
                ]);
                return Redirect::to('analysis')->with('message','Analysis Updated Susseccfully');
        }
//        $postimage = $request->file('image');
//        if (!empty($postimage)){
//            $name = time().'.'.$postimage->getClientOriginalExtension();
//            $image_name =$postimage->move(public_path().'/upload/images', $name);
//            $analysis = Analysis::where('id','=',$id)->first();
//            $analysis->title = $request->title;
//            $analysis->published_by = $request->published_by;
//            $analysis->image = $name;
//            $analysis->status = $request->status;
//            $analysis->description = $request->description;
//            $analysis->time_zone =  date('Y-m-d');
//            $analysis->save();
//            return Redirect('/Admin/analysis');
//        } else {
//            $analysis = Analysis::where('id','=',$id)->first();
//            $analysis->title = $request->title;
//            $analysis->published_by = $request->published_by;
//            $analysis->status = $request->status;
//            $analysis->description = $request->description;
//            $analysis->time_zone =  date('Y-m-d');
//            $analysis->save();
//            return Redirect('/Admin/analysis');
//        }
    }

    public function softdelete($id)
    {
        $trash_data = Analysis::find($id);
        $trash_data->soft_del = 'ok';
        $trash_data->save();
        return Redirect::to('analysis')->with('message','Article was sent into trash Susseccfully');
    }
    public function restoreanalysis($id){
        $restore_data = Analysis::find($id);
        $restore_data->soft_del = 'no';
        $restore_data->save();
        return Redirect::to('analysis')->with('message','Article was restored Susseccfully');
    }
    public function showtrash(){
        $trash_analysis = Analysis::where('soft_del','=','ok')->get();
        return view('Admin.analysis.trash',compact('trash_analysis'));
    }
    public function destroy($id)
    {
        $analysis_data = Analysis::find($id);
        $unlinkimage = $analysis_data->image;
        unlink('upload/images/'.$unlinkimage);
        $analysis_data->delete();
        return Redirect::to('analysis')->with('message','Analysis Deleted Susseccfully');
    }
}

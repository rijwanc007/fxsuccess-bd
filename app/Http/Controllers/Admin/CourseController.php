<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Category;
use Validator;
use DB;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $courses = Course::where('status','=',1)->where('soft_del','=','no')->orderBy('id', 'DESC')->get();
       return view('Admin.Course.manage_course',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::where('status','=',1)->get();
        return view('Admin.Course.create_course',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
    //    $this->validate($request,[
    //         'title'=> 'required|unique:categories',
    //         'status'=> 'required',
           
    //     ]);

        $course = new Course();
        $course->title = $request->title;
        $course->cat_id = $request->cat_id;
        $course->description = $request->description;
        $course->status = $request->status;
        $course->save();
        return Redirect::to('course')->with('message','Course Created Susseccfully');
        

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $categories = category::where('status','=',1)->get();
        $course_by_id = Course::find($id);
        return view('Admin.Course.edit_course', compact('course_by_id','categories'));
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
        $course = Course::find($id);
        $course->title = $request->title;
        $course->cat_id = $request->cat_id;
        $course->description = $request->description;
        $course->status = $request->status;
        $course->save();
        return Redirect::to('course')->with('message','Course Updated Susseccfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softdelete($id)
    {
        $trash_data = Course::find($id);
        $trash_data->soft_del = 'ok';
        $trash_data->save();
        return Redirect::to('course')->with('message','Courses was sent into trash Susseccfully');
    }
    public function restorecourse($id){
        $restore_data = Course::find($id);
        $restore_data->soft_del = 'no';
        $restore_data->save();
        return Redirect::to('course')->with('message','Courses was restored Susseccfully');
    }
    public function showtrash(){
        $trash_course= Course::where('soft_del','=','ok')->get();
        return view('Admin.Course.trash',compact('trash_course'));
    }
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return Redirect::to('course')->with('message','Course Deleted Susseccfully');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Advertisement;
use App\AdvertisementPage;
use App\Category;
use App\Brokerreview;
use App\Article;
use App\Analysis;
use App\Course;

class FxHomeController extends Controller
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
        $recent_analysis = Analysis::orderBy('id', 'DESC')->limit(5)->get();
        $show_popular = Analysis::popularDay()->take(4)->get();
        $all_articles = Article::all();
        $first_broker = Brokerreview::where('position','=','first')->where('status','=','2')->take(1)->first();
        $second_broker = Brokerreview::where('position','=','second')->where('status','=','2')->take(1)->first();
        $third_broker = Brokerreview::where('position','=','third')->where('status','=','2')->take(1)->first();
        $left_advertisement = Advertisement::where('position','=','Head->Bottom->Left')->orderBy('id','DESC')->take(3)->get()->toArray();
        $first_img = array_shift($left_advertisement);
       
        return view('Front_End.Front_Page1',compact('newArr','recent_analysis','show_popular','all_articles','first_broker','second_broker','third_broker','first_img','left_advertisement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coursebyid($id){
       
        $course_by_id = Course::find($id);
        return response()->json($course_by_id);
    }

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

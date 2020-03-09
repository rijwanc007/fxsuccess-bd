<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brokerreview;
use App\Analysis;
use App\Comment;
use DB;
class FrontAnalysisController extends Controller
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
     
        $analysis_data = Analysis::orderBY('id','desc')->paginate(1);
        $recent_analysis = Analysis::orderBy('id', 'DESC')->limit(5)->get();
        $show_popular = Analysis::popularDay()->take(4)->get();
        $first_broker = Brokerreview::where('position','=','first')->where('status','=','2')->take(1)->first();
        $second_broker = Brokerreview::where('position','=','second')->where('status','=','2')->take(1)->first();
        $third_broker = Brokerreview::where('position','=','third')->where('status','=','2')->take(1)->first();


        if ($request->ajax()) {

            //return view('Front_End.partial', ['articles' => $articles])->render(); 

            return view('Front_End.partialanalysis', ['analysis_data' => $analysis_data])->render();  
            } 
        return view('Front_End.analysis.analysis',compact('analysis_data','newArr','recent_analysis','show_popular','first_broker','second_broker','third_broker'));
    }

    public function show($id)
    {   
        $visit_count = Analysis::find($id);
        $visit_count->visit();
        $number = $visit_count->visitsForever($id);
        $show_popular = Analysis::popularDay()->take(4)->get();
        $cat_Courses = DB::table('courses')
                    ->select('courses.id','courses.title as coursetitle','courses.cat_id','categories.id as categoryid','categories.title as categorytitle')
                    ->leftJoin('categories','courses.cat_id','=','categories.id')
                    ->get()->toArray(); 

        $newArr = [];
        foreach($cat_Courses as $course){
            $newArr[$course->categorytitle][$course->id]['title'] = $course->coursetitle;
            $newArr[$course->categorytitle][$course->id]['id'] = $course->id;
        }
        
       
        $analysis_detail_data=Analysis::find($id);
        $recent_analysis = Analysis::orderBy('id', 'DESC')->limit(5)->get();
        $first_broker = Brokerreview::where('position','=','first')->where('status','=','2')->take(1)->first();
        $second_broker = Brokerreview::where('position','=','second')->where('status','=','2')->take(1)->first();
        $third_broker = Brokerreview::where('position','=','third')->where('status','=','2')->take(1)->first();

        return view('Front_End.analysis.analysis-detail',compact('analysis_detail_data','newArr','recent_analysis','show_popular','first_broker','second_broker','third_broker','number'));
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brokerreview;
use App\Brokervideo;
use App\Fxbrokerreview;
use App\Brokerprocon;
use Illuminate\Support\Facades\Redirect;
class BrokerReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allreview = Brokerreview::where('position','=','')->where('status','=','2')->where('soft_del','=','no')->orderBy('id', 'DESC')->paginate(5);
        $first_broker = Brokerreview::where('position','=','first')->where('status','=','2')->where('soft_del','=','no')->take(1)->first();
        $second_broker = Brokerreview::where('position','=','second')->where('status','=','2')->where('soft_del','=','no')->take(1)->first();
        $third_broker = Brokerreview::where('position','=','third')->where('status','=','2')->where('soft_del','=','no')->take(1)->first();
       
        if ($request->ajax()) {

            return view('Front_End.partial_broker', ['allreview' => $allreview])->render();  
          }  
         
        return view('Front_End.broker-review',compact('allreview','first_broker','second_broker','third_broker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Front_End.brokerfront.brokerfrnt_details');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $brokerimage = $request->file('broker-logo');
       
        $ext = explode('.',$brokerimage->getClientOriginalName());
        $name = time().'.'.$ext[1];
        $image_name =$brokerimage->move(public_path().'/brokerimages/',$name);
        $jsdata = json_encode($request->all());
        $review = new Brokerreview();
        $review->broker_info = $jsdata;
        $review->image = $name;
        $review->status =$request->status; 
        $review->save();
        return Redirect::to('allbrokers')->with('message','Broker Status Updated Susseccfully');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function summarydata($id){
      
        $Mydata = Brokerreview::find($id);
        $broker_info =json_decode($Mydata->broker_info, true) ;
        
        return response()->json($broker_info);
    }
    public function show($id)
    {  

        $broker_vid = Brokervideo::where('brokerreview_id','=',$id)->first();
        $broker_by_id = Brokerreview::find($id);
        $jsdecod = json_decode($broker_by_id->broker_info);
        if(!empty($broker_vid)){
            $jsonvid = json_decode($broker_vid->video_info);
        }
       
        $fx_rev = Fxbrokerreview::where('brokerreview_id','=',$id)->first();
        if(!empty($broker_procon)){
            $fxrev = $fx_rev->fxreview;
        }
        $broker_procon = Brokerprocon::where('brokerreview_id','=',$id)->first();
        if(!empty($broker_procon)){
            $jsonprocon = json_decode($broker_procon->pro_con);
        }
        $first_broker = Brokerreview::where('position','=','first')->where('status','=','2')->take(1)->first();
        $second_broker = Brokerreview::where('position','=','second')->where('status','=','2')->take(1)->first();
        $third_broker = Brokerreview::where('position','=','third')->where('status','=','2')->take(1)->first();

        return view('Front_End.review-detail',compact('broker_by_id','jsdecod','jsonvid','jsonprocon','broker_procon','fxrev','fx_rev','broker_vid','first_broker','second_broker','third_broker'));
       
    }
    public function brokerlist(){
       
        $all_brokers = Brokerreview::where('soft_del','=','no')->orderBy('id', 'DESC')->get();
       
        return view('Admin.Broker.manage_broker',compact('all_brokers'));
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
    public function changestatus($id){
        $review_by_id = Brokerreview::find($id);
        $review_by_id->status = "2";
        $review_by_id->save();
        return Redirect::to('brokerlist')->with('message','Broker Status Updated Susseccfully');
    }
    public function rankupdate(Request $request, $id, $rank){
      
     
      //$find_given_id_row = Brokerreview::where('id','=',$id)->first();
      $find_previous = Brokerreview::where('position','=',$rank)->first();
    
      if(!empty($find_previous)){
        $find_previous->position = '';
        $find_previous->save();
        $find_new_rank = Brokerreview::where('id','=',$id)->first();
        $find_new_rank->position = $rank;
        $find_new_rank->save();
      }
         else{
            $find_new_rank = Brokerreview::where('id','=',$id)->first();
            $find_new_rank->position = $rank;
            $find_new_rank->save();
         }
        

        //return response()->json($find_previous);
       


       
    }

    

    public function deactivebroker($id){
        $review_by_id = Brokerreview::find($id);
        $review_by_id->status = "1";
        $review_by_id->save();
        return Redirect::to('brokerlist')->with('message','Broker Status Updated Susseccfully');
    }
    public function showbroker($id){
        $broker_info = Brokerreview::find($id);
        $jsdecod = json_decode($broker_info->broker_info);
        return view('Admin.Broker.show_broker',compact('broker_info','jsdecod'));
        // dd($broker_info);
        // exit;

    }
    public function updatebroker(Request $request, $id){

        $brokerimage = $request->file('broker-logo');
        if (!empty($brokerimage)){
             $ext = explode('.',$brokerimage->getClientOriginalName());
             $name = time().'.'.$ext[1];
             $image_name =$brokerimage->move(public_path().'/brokerimages/',$name);
             $broker_info = Brokerreview::find($id);
             $jsdata = json_encode($request->all());
             $broker_info->broker_info = $jsdata;
             $broker_info->image = $name;
             $broker_info->status =$request->status; 
             $broker_info->position =$request->position; 
             $broker_info->save();
             return Redirect::to('brokerlist')->with('message','Broker  Updated Susseccfully');
          } else{
            $broker_info = Brokerreview::find($id);
            $jsdata = json_encode($request->all());
            $broker_info->broker_info = $jsdata;
            $broker_info->status =$request->status; 
            $broker_info->position =$request->position; 
            $broker_info->save();
            return Redirect::to('brokerlist')->with('message','Broker  Updated Susseccfully');
          }

    }
    public function videostoe(Request $request, $id){
       
        $new_vid =  Brokervideo::where('brokerreview_id','=',$id)->first();
        if(!empty($new_vid)){
            $new_vid->delete();
            $jsondata = (json_encode($request->all()));
            $new_vid->video_info = $jsondata;
            $new_vid->broker_id = $id;
            $new_vid->save();
            return Redirect::to('showbroker/'.$id)->with('message','Broker  Updated Susseccfully');
          
        } else{
           $new_vid = new Brokervideo();
            $jsondata = (json_encode($request->all()));
            $new_vid->video_info = $jsondata;
            $new_vid->broker_id = $id;
            $new_vid->save();
            return Redirect::to('showbroker/'.$id)->with('message','Broker  Updated Susseccfully');
          
        }
       
    }
    public function videoadd($id)
    {   
        $broker_vid = Brokervideo::where('brokerreview_id','=',$id)->first();
        if (!empty($broker_vid)) {
            $jsonvid = json_decode($broker_vid->video_info);
        }
       
        return view('Admin.Broker.add_video',compact('id','jsonvid','broker_vid'));
    }
  
    public function updatevideo($id){
       $del_row = Brokervideo::find($id)->delete();
    }

    public function reviewadd($id)
    {   
        $fx_review = Fxbrokerreview::where('brokerreview_id','=',$id)->first();
        if(!empty($fx_review)){
            $fxreview = $fx_review->fxreview; 
        }
        return view('Admin.Broker.add_review',compact('id','fxreview','fx_review'));
    }

    public function reviewstore(Request $request, $id)
    {
        $fx_review = Fxbrokerreview::where('brokerreview_id', '=',$id)->first();
        if(!empty($fx_review)){
            $fx_review->delete();
            $fx_review ->fxreview = $request->fxreview;
            $fx_review ->broker_id = $id;
            $fx_review->save();
            return Redirect::to('showbroker/'.$id)->with('message','Broker  Updated Susseccfully');
          } else{
            $fx_review = new Fxbrokerreview();
            $fx_review ->fxreview = $request->fxreview;
            $fx_review ->broker_id = $id;
            $fx_review->save();
            return Redirect::to('showbroker/'.$id)->with('message','Broker  Updated Susseccfully');
          }
    }

    public function proconadd($id){

        $broker_procon = Brokerprocon::where('brokerreview_id','=',$id)->first();
        if (!empty($broker_procon)) {
            $jsonprocon = json_decode($broker_procon->pro_con);
        }
        return view('Admin.Broker.add_procon',compact('id','jsonprocon'));
    }

    public function storeprocon(Request $request, $id){
        
        $pro_con =  Brokerprocon::where('brokerreview_id','=',$id)->first();
        if(!empty($pro_con)){
            $pro_con->delete(); 
            $jsondata = (json_encode($request->all()));
            // dd($jsondata);
            // exit;
            $pro_con->pro_con = $jsondata;
            $pro_con->broker_id = $id;
            $pro_con->save();
            return Redirect::to('showbroker/'.$id)->with('message','Broker  Updated Susseccfully');
        } else{ 
            $pro_con = new Brokerprocon();
            $jsondata = (json_encode($request->all()));
            $pro_con->pro_con = $jsondata;
            $pro_con->broker_id = $id;
            $pro_con->save();
            return Redirect::to('showbroker/'.$id)->with('message','Broker  Updated Susseccfully');

        }
    }
    public function update(Request $request, $id)
    {
        dd($request->all());
        exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restorebroker($id){
     $restore_broker = Brokerreview::find($id);
     $restore_broker->soft_del = 'no';
     $restore_broker->save();
     return Redirect::to('brokerlist')->with('message','Broker  was restored Susseccfully');
    }
    public function showtrash(){
        $trashed_broker = Brokerreview::where('soft_del','=','ok')->get();

        return view('Admin.Broker.trash',compact('trashed_broker'));
    }
    public function softdelete($id){
        $send_trash = Brokerreview::find($id);
        $send_trash->soft_del ='ok';
        $send_trash->save();
        return Redirect::to('brokerlist')->with('message','Broker  was sent trash Susseccfully');
    }
    public function destroy($id)
    {
       $delete_broker = Brokerreview::find($id);
       $delete_broker->delete();
       return Redirect::to('brokerlist')->with('message','Broker  was Deleted  Susseccfully');

    }
}

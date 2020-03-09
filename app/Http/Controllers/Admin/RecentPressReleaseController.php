<?php

namespace App\Http\Controllers\Admin;

use App\RecentPressRelease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecentPressReleaseController extends Controller
{
    public function index()
    {
        $press_release = RecentPressRelease::paginate(5);
        return view('Admin.PressRelease.press_release_index',compact('press_release'));
    }
    public function create()
    {
        return view('Admin.PressRelease.create_press_release');
    }
    public function store(Request $request)
    {
     $this->validate($request,[
         'source_tag' =>'required',
         'source_link'=>'required',
         'detail_tag' =>'required',
         'detail_link' =>'required'
             /*|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/*/
     ]);
     RecentPressRelease::create(
         [
             'source_tag' =>$request->source_tag,
             'source_link' =>$request->source_link,
             'detail_tag' =>$request->detail_tag,
             'detail_link' =>$request->detail_link
         ]
     );
     return redirect('Press_Release');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
       $press_release = RecentPressRelease::find($id);
       return view('Admin.PressRelease.edit_press_release',compact('press_release'));
    }
    public function update(Request $request, $id)
    {
      $press_data = RecentPressRelease::find($id);
      $press_data->update([
         'source_tag' => $request->source_tag,
         'source_link' => $request->source_link,
         'detail_tag' => $request->detail_tag,
         'detail_link' => $request->detail_link
      ]);
      return redirect('Press_Release');
    }
    public function destroy($id)
    {
        $press_data = RecentPressRelease::find($id);
        $press_data->delete();
        return redirect('Press_Release');
    }
}

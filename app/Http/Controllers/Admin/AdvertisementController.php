<?php

namespace App\Http\Controllers\Admin;

use App\Advertisement;
use App\AdvertisementPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertisementController extends Controller
{
    public function index()
    {
        $advertisement_data = Advertisement::orderBy('id','DESC')->get();
        return view('Admin.advertisement.advertisement_index',compact('advertisement_data'));
    }
    public function create()
    {
        $advertisement_page = AdvertisementPage::all();
        return view('Admin.advertisement.create_advertisement',compact('advertisement_page'));
    }
    public function store(Request $request)
    {
       $advertisement_image =$request->file('advertisement_image');
       $name= time().'.'.$advertisement_image->getClientOriginalExtension();
       $advertisement_image->move(public_path().'/addimage/',$name);
       Advertisement::create([
          'advertisement' => $name,
           'position' => $request->position
       ]);
       return redirect('advertisement');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $advertisement_page = AdvertisementPage::all();
        $advertisement_data = Advertisement::find($id);
        return view('Admin.advertisement.advertisement_edit',compact('advertisement_data','advertisement_page'));
    }
    public function update(Request $request, $id)
    {
        $advertisement_image =$request->file('advertisement_image');
        $advertisement_data=Advertisement::find($id);
        if(!empty($advertisement_image)){
            $name = time().'.'.$advertisement_image->getClientOriginalExtension();
            $advertisement_image->move(public_path().'/addimage/',$name);
            $advertisement_data->update([
                'advertisement'=>$name,
                'position'=>$request->position
            ]);
            return Redirect('advertisement');
        }else{
            $advertisement_data->update([
                'position'=>$request->position
            ]);
            return Redirect('advertisement');
        }
    }
    public function destroy($id)
    {
        $advertisement_data = Advertisement::find($id);
        $unlinkimage = $advertisement_data->advertisement;
        unlink('addimage/'.$unlinkimage);
        $advertisement_data->delete();
        return redirect()->back();
    }
}

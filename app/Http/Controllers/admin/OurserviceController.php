<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Ourservice;

class OurserviceController extends Controller
{

    public function addserviceform()
    {
         return view('backend.addserviceform');
    }


    public function list_service()
    {
        $ourservices=Ourservice::all()->toArray();
        return view('backend.listservices',compact('ourservices'));
    }



    public function store_service(Request $request)
    {
        // dd($request->all());
      $ourservice=Ourservice::find($request->id);
      if($request->hasfile('icon_image')){

        $imageName = time().".".$request->icon_image->extension();
        $request->icon_image->move(public_path('images'),$imageName);
        
      }


        $addservice = ([

            'service_heading' => $request->service_heading,
            'icon_heading'    => $request->icon_heading,
            'description'     => $request->description,
            'icon_image'      => $imageName,

        ]);
        Ourservice::insert([$addservice,]);
       return redirect()->route('list-service')->with(array('class'=>"alert alert-success",'message' =>'Record has been insert successfully!'));

    }

    public function editform_service($id){

       $editservice = Ourservice::find($id);
       return view("backend.editserviceform",compact('editservice'));

    }

    public function update_service(Request $request){



      $ourservice=Ourservice::find($request->id);
      if($request->hasfile('icon_image')){

        $icon_image = time().".".$request->icon_image->extension();
        $request->icon_image->move(public_path('images'),$icon_image);
        $Ourservice=Ourservice::find($request->id);
        $Ourservice->service_heading =$request->service_heading;
        $Ourservice->icon_heading    =$request->icon_heading;
        $Ourservice->description     =$request->description;
        $Ourservice->icon_image      =$icon_image;
        $Ourservice->save();

      }else{

        $Ourservice=Ourservice::find($request->id);
        $Ourservice->service_heading =$request->service_heading;
        $Ourservice->icon_heading    =$request->icon_heading;
        $Ourservice->description     =$request->description;
        $Ourservice->save();
      }


      if($Ourservice){
        return redirect()->route('list-service')->with(array('class'=>"alert alert-success",'message' =>'Record has been update successfully!'));
      }else{
        return redirect()->route('list-service')->with(array('class'=>"alert alert-danger",'message' =>'Sorry not updated'));
      }




     }


    public function delete_service($id){

        Ourservice::find($id)->delete();
        return redirect()->route('list-service')->with(array('class'=>"alert alert-danger",'message' =>'Record has been Delete successfully!'));
    }


}

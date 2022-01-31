<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutusContent;
use Illuminate\Http\Request;

class AboutusContentController extends Controller
{
   public function aboutus_content()
   {
       $dataviews=AboutusContent::all()->toArray();
       return view('backend.aboutuscontent',compact('dataviews'));
   }


   public function process_aboutus(Request $request){



// dd($request->all());




    $id =  AboutusContent::find($request->id);
     $register_process = ([

        'aboutus_h1' => $request->aboutus_h1,
        'aboutus_h2' => $request->aboutus_h2,
        'aboutus_p1' => $request->aboutus_p1,
        'aboutus_p2' => $request->aboutus_p2,


     ]);

    //  AboutusContent::create($register_process);

    if($request->hasfile('aboutus_content_img')){
        // dd($request->all());

       $imageName= time().'.'.$request->aboutus_content_img->extension();
      $request->aboutus_content_img->move(public_path('images'), $imageName);
      $register_process['aboutus_content_img']= $imageName;

    }


    if($request->hasfile('s_image')){
        // dd($request->all());


        $slider_image =time().'.'.$request->s_image->extension();
        $request->s_image->move(public_path('images'),$slider_image);
        $register_process['aboutus_slider_img'] =$slider_image;

    }






      if($request->id)
      {
        AboutusContent::where('id',$request->id)->update($register_process );
           $msg = "'Record has been updated successfully!'";
      }

    else{
        // return $register_process;
      AboutusContent::insert($register_process);
          $msg = "'Record has been insert successfully!'";
       }


      return redirect()->route('aboutus-content')->with(array('class'=>"alert alert-success",'message' =>$msg));

   }
}

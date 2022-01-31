<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Homesitepage;
use Illuminate\Http\Request;

class HomesettingController extends Controller
{
      public function homesite_page()

      {
          $homepage=Homesitepage::all()->toArray();
          return view('backend.homesitesetting',compact('homepage'));
      }




       public function register_homesetting(Request $request){

        // dd($request->all());
        Homesitepage::find($request->id);
        $home_site_setting=([

            'slider_p'        => $request->slider_p,
            'slider_h'        => $request->slider_h,
            'service_h'       => $request->service_h,
            'donation_h1'     => $request->donation_h1,
            'donation_h2'     => $request->donation_h2,
            'footer_logo_h'   => $request->footer_logo_h,
            'copyright_text'  => $request->copyright_text,
           ]);

        if($request->hasfile('header_logo')){

        $imageName = time().'.'.$request->header_logo->extension();
        $request->header_logo->move(public_path('images'),$imageName);
        $home_site_setting['header_logo'] =$imageName;

        }

        if($request->hasfile('slider_image')){

            $slider_image =time().'.'.$request->slider_image->extension();
            $request->slider_image->move(public_path('images'),$slider_image);
            $home_site_setting['slider_image'] =$slider_image;

        }

        if($request->hasfile('footer_logo')){

            $footer_logo = time().'.'.$request->footer_logo->extension();
            $request->footer_logo->move(public_path('images'),$footer_logo);
            $home_site_setting['footer_logo'] =$footer_logo;
        }


        //dd($request->id);
        //    HomeSitePage::create($home_site_setting);

           if($request->id)
           {
            Homesitepage::where('id',$request->id)->update($home_site_setting);
                $msg = "'Record has been updated successfully!'";
           }

         else{
            Homesitepage::insert($home_site_setting);
                $msg = "'Record has been insert successfully!'";
            }


           return redirect()->route('homesitepage')->with(array('class'=>"alert alert-success",'message' =>$msg));
    }
}

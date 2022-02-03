<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Testinomial;



class TestinomialController extends Controller
{

    public function testinomial_list(){

        $views=Testinomial::all()->toArray();
        return view("backend.listtestinomial")->with('views',$views);
    }

    public function testinomial_form(){


        return view("backend.addtestinomial");
    }

    public function store_testinomial(Request $request)

    {

        // dd($request->all());
        $data =([

            'client_name' => $request->client_name,
            'description' => $request->description,
          ]);

        if($request->hasfile('client_image')){
           $imageName= time().'.'.$request->client_image->extension();
           $request->client_image->move(public_path('images'), $imageName);
            $data['client_image']= $imageName;
          }

            Testinomial::insert($data);
             return redirect()->route('testinomial-list')->with('message','Record has been insert');
  }


       public function editform_testinomial($id)
       {
        $edittestinomial=Testinomial::find($id);
        return view("backend.edittestinomial",compact('edittestinomial'));
       }


   public function update_testinomial(Request $request)
  {
    // dd($request->all());
    if($request->hasfile('client_image')){

        $client_image = time().".".$request->client_image->extension();
        $request->client_image->move(public_path('images'),$client_image);
        $Ourtestinomial=Testinomial::find($request->id);
        $Ourtestinomial->client_image    = $request->client_image;
        $Ourtestinomial->description     = $request->description;
        $Ourtestinomial->client_image    = $client_image;
        $Ourtestinomial->save();

      }else{

        $Ourtestinomial=Testinomial::find($request->id);
        $Ourtestinomial->client_image = $request->client_image;
        $Ourtestinomial->description  = $request->description;
        $Ourtestinomial->save();
      }


      if($Ourtestinomial){
        return redirect()->route("testinomial-list")->with(array('class'=>"alert alert-success",'message' =>'Record has been update successfully!'));
      }else{
        return redirect()->route('testinomial-list')->with(array('class'=>"alert alert-danger",'message' =>'Sorry not updated'));
      }




  }

  public function delete_record($id)
  {
       Testinomial::where('id',$id)->delete();
       return redirect()->route('testinomial-list')->with('message','Record has been Delete');
  }


}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function view_login(){

        return view('backend.login');
    }


    public function register_form(){

        return view('backend.register');
    }

    public function register_process(Request $request)

    {

         $register_process =([

              'fullname' =>$request->fullname,
              'lastname' =>$request->lastname,
              'email'    =>$request->email,
              'password' =>Hash::make($request->password),
         ]);

         User::create($register_process);
         return redirect()->route('view_login')->with('message','Registration Successfully!');

    }

       public function login_process(Request $request)
       {

        $credentials =([

            'email'    => $request['email'],
            'password' =>$request['password']

        ]);
        // dd( $credentials);
        //  dd($request->all());
        if(Auth::attempt($credentials)) {
            if(Auth::user()->is_role =="Admin"){
                return redirect()->route('admin-dashboard')->with('message','Login Successfully');;
            }
            return redirect()->route('user-dashboard')->with('message','Login Successfully');
        }

        return redirect()->back()->with('error','Invalid credentials');
    }
        public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('view_login')->with('message','Logout Successfully');
    }
}

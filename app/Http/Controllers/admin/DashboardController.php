<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin_dashboard(){

     return view('backend.dashboard');

    }

    public function user_dashboard(Request $request)
    {
        return view('backend.userdashboard');
    }


    public function our_service()
    {
         return view('backend.ourservice');
    }


}

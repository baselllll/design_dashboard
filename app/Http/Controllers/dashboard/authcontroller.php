<?php

namespace App\Http\Controllers\dashboard;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class authcontroller extends Controller
{
    //
    public function index(){
        return view('dashboard.DashAuth.index');
    }
    public function login(Request $request){
        $email = $request->input('email');
        $pass = $request->input('pass');
        $user = Profile::all();
        foreach ($user as $us){
            if($us->email==$email and $us->pass==$pass){
                $request->session()->put('email',$us->email );
                $request->session()->put('pass',$us->pass );
                return redirect('/dashboard/profile');
            }
            else{
                return redirect('/dashboard/dashauth');
            }
        }
    }
    public function logout(){
        return redirect('/dashboard/dashauth');
    }
}

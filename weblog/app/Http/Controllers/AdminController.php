<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function checkLogin(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:3|max:12'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password'  => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            return redirect('/admin/weblog')->with('page', 'weblog');
        }
        else{
            return back()->with('errorMsg', 'Wrong Login Inputs');
        }
    }

    public function admin(){
        return view('admin.weblog');
    }

    public function logout(){
        Auth::logout();

        return redirect('/admin/login');
    }
}

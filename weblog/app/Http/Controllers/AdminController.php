<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Illuminate\Support\Facades\DB;


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

    public function storeBlog(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $title = $request->get('title');
        $content = $request->get('content');
        $image = $request->file('image');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path("blogImgs"), $new_name);

        DB::table('blogs')->insert(['title' => $title, 'content' => $content, 'image' => 'blogImgs/'.$new_name]);

        return back()->with('success', 'Image uploaded successfully');
    }
}

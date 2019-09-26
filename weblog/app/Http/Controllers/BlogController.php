<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return redirect('blog');
    }
    public function main(){
        return view('blog.main');
    }
}

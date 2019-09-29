<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function index(){
        return redirect('blog');
    }

    public function main(){
        $datas = DB::table('blogs')->paginate(10);
        return view('blog.main', compact('datas'));
    }

    public function login(){
        return view('login');
    }
}

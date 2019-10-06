<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class BlogController extends Controller
{
    public function index(){
        return redirect('blog');
    }

    public function main(){
        $datas = DB::table('blogs')->paginate(10);
        return view('blog.main', compact('datas'))->with('page', 'weblog');
    }

    public function pairBlog($id){
        $blog = Blog::findOrFail($id);

        return view('blog.pairBlog', compact('blog'))->with('page', 'weblog');
    }
}

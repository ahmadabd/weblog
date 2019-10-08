<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PodcastController extends Controller
{


    public function main(){
        $podcasts = DB::table('podcasts')->paginate(10);
        return view('blog.podcast', compact('podcasts'))->with('page','podcast');
    }
}

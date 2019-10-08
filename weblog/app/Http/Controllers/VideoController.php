<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function main(){
        return view('blog.video')->with('page','video');
    }
}

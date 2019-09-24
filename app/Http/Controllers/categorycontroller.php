<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function admin(){
    	return view('admin.layout.index');
    }
    public function rss(){
    	return view('pages/rss');
    }
}

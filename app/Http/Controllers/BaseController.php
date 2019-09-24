<?php

namespace App\Http\Controllers;
use App\introduce;
use Illuminate\Http\Request;

class BaseController extends Controller
{
  public function getbc(){
  		return view('pages/bao-cao-thuong-nien');
  }
}

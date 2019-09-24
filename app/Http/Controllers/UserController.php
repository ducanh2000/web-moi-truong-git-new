<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    public function list()
    {
        $array['users']=DB::table('users')->get();
        return view('admin.page.user.list',$array);
    }
}

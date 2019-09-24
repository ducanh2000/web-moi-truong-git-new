<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\customer;
class infocus extends Controller
{
    public function in(Request $Request){
    	$this->validate($Request,
    		[
    			'company' => 'required',
                'project' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'content' => 'required'
    		],
    		[
    			'company.required' => 'Bạn Chưa Nhập Tên Công Ty!',
                'project.required' => 'Bạn Chưa Nhập Tên Dự Án!',
                'address.required' => 'Bạn Chưa Nhập Địa Chỉ!',
                'phone.required' => 'Bạn Chưa Nhập Phone!',
                'content.required' => 'Bạn Chưa Nhập Nội Dung!'
    		]
    	);
        $home = DB::table('news')->limit(4)->get();
    	$intro = new customer;
    	$intro->company =$Request->company;
    	$intro->nameproject =$Request->project;
    	$intro->address =$Request->address;
    	$intro->phone =$Request->phone;
    	$intro->content =$Request->content;
    	$intro->save();
    	$check = true;
        return redirect('/') ;
    }
}

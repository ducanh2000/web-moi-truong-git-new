<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\customer;
class infocus extends Controller
{
    public function getlist()
    {
        $array['customers']=DB::table('customer')->get();
        return view('admin.customer.listcustomer',$array);
    }
    public function in(Request $Request){
    	$this->validate($Request,
    		[
    			'company' => 'required',
                'project' => 'required',
                'address' => 'required',
                'phone'   => 'required|min:10|max:11',
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
        $home = DB::table('customer')->limit(4)->get();
    	$intro = new customer;
    	$intro->company =$Request->company;
    	$intro->nameproject =$Request->project;
    	$intro->address =$Request->address;
    	$intro->phone =$Request->phone;
    	$intro->content =$Request->content;
    	$intro->save();
    	$check = true;
        return redirect('/')->with('thongbao','bạn đã thêm thành công!') ;
    }
    public function getdel($id)
    {
        DB::table('customer')->where('id',$id)->delete();
        return redirect()->route('getlistin');
    }
}

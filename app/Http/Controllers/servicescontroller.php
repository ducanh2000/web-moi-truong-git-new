<?php

namespace App\Http\Controllers;
use App\services;
use Illuminate\Http\Request;
use DB;

class servicescontroller extends Controller
{
    public function getadd(){
    	return view('admin/service/addservice');
    }
    public function postadd(Request $Request){
    	$this->validate($Request,
    		[
    			'name' => 'required',
                'content' => 'required'
    		],
    		[
    			'name.required' => 'Bạn Chưa Nhập Tên!',
                'content.required' => 'Bạn Chưa Nhập Nội Dung!'
    		]
    	);
    	$sv = new services;
    	$sv->title =$Request->name;
    	$sv->content =$Request->content;
    	$sv->slug=to_slug($Request->name).time();
    	$sv->save();
    	return redirect('admin/services/addservices')->with('thongbao','Thêm Thành Công!');
    }
    public function getlist(){
    	$sv =DB::table('services')->get();
    	return view('admin/service/listservice',['intro'=>$sv]);
    }
    public function getedit($id){
    	$sv = services::find($id);
    	return view('admin/service/editservice',['intro'=>$sv]);
    }
    public function postedit(Request $Request,$id){
    	$sv = services::find($id);
    	$this->validate($Request,
    		[
    			'name' => 'required'
    		],
    		[
    			'name.required' => 'Bạn Chưa Nhập Tên!'
    		]
    	);
    	$sv->title =$Request->name;
    	$sv->content =$Request->content;
    	$sv->slug=to_slug($Request->name).time();
    	$sv->status =($Request->status)?1:0;
    	$sv->save();
    	return redirect('admin/services/editservices/'.$id)->with('thongbao','Sửa Thành Công!');
    }
    public function getcontentsv($slug,$id){
        $gt = services::find($id);
       
        return view('pages/dich-vu',['gt'=>$gt]);
    }
     public function getdel($id){
        $sv = services::find($id);
        $sv->delete();
        return redirect('admin/services/listservices');
    }
}

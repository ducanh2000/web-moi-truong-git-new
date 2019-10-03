<?php

namespace App\Http\Controllers;
use App\document;
use Illuminate\Http\Request;
use DB;

class documentcontroller extends Controller
{
   public function getadd(){
    	return view('admin/document/adddoc');
    }
    public function postadd(Request $Request){
    	$this->validate($Request,
    		[
    			'number' => 'required'
    		],
    		[
    			'number.required' => 'Bạn Chưa Nhập Tên!'
    		]
    	);
    	$intro = new document;
    	$intro->number =$Request->number;
    	$intro->address =$Request->address;
    	$intro->content =$Request->content;
    	$intro->slug=to_slug($Request->title).time();
    	$intro->save();
    	return redirect('admin/document/adddoc')->with('thongbao','Thêm Thành Công!');
    }
    public function getlist(){
    	$intro =DB::table('document')->get();
    	return view('admin/document/listdoc',['intro'=>$intro]);
    }
    public function getedit($id){
    	$intro = document::find($id);
    	return view('admin/document/editdoc',['intro'=>$intro]);
    }
        public function postedit(Request $Request,$id){
    	$intro = document::find($id);
    	$this->validate($Request,
    		[
                'number' => 'required',
                'address' => 'required',
                'content' => 'required'
            ],
            [
                'number.required' => 'Bạn Chưa Nhập Số / Kí Hiệu!',
                'address.required' => 'Bạn Chưa Nhập Địa Chỉ!',
                'number.required' => 'Bạn Chưa Nhập Nội Dung!'
            ]	
    	);;
    	$intro->number =$Request->number;
    	$intro->address =$Request->address;
    	$intro->content =$Request->content;
    	$intro->slug=to_slug($Request->number).time();
    	$intro->save();
    	return redirect('admin/document/editdoc/'.$id)->with('thongbao','Sửa Thành Công!');
    }
    public function getvb(){
        $intro = document::all();
        return view('pages/van-ban-che-do',['int'=>$intro]);
    }
    public function getdel($id){
        $intro = document::find($id);
        $intro->delete();
        return redirect('admin/document/listdoc');
    }

}

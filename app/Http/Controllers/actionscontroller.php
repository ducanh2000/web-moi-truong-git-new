<?php

namespace App\Http\Controllers;
use App\action;
use Illuminate\Http\Request;

class actionscontroller extends Controller
{
    public function getadd(){
    	return view('admin/action/addaction');
    }
    public function postadd(Request $Request){
    	$this->validate($Request,
    		[
    			'name' => 'required',
                'content' => 'required'
    		],
    		[
    			'name.required' => 'Bạn Chưa Nhập Tên!',
                'name.required' => 'Bạn Chưa Nhập Nội Dung!'
    		]
    	);
    	$ac = new action;
    	$ac->title =$Request->name;
    	$ac->content =$Request->content;
    	$ac->slug=to_slug($Request->name).time();
    	$ac->save();
    	return redirect('admin/actions/addactions')->with('thongbao','Thêm Thành Công!');
    }
    public function getlist(){
    	$ac = action::paginate(4);
    	return view('admin/action/listaction',['intro'=>$ac]);
    }
    public function getedit($id){
    	$ac = action::find($id);
    	return view('admin/action/editaction',['intro'=>$ac]);
    }
    public function postedit(Request $Request,$id){
    	$ac = action::find($id);
    	$this->validate($Request,
    		[
                'name' => 'required',
                'content' => 'required'
            ],
            [
                'name.required' => 'Bạn Chưa Nhập Tên!',
                'name.required' => 'Bạn Chưa Nhập Nội Dung!'
            ]
    	);
    	$ac->title =$Request->name;
    	$ac->content =$Request->content;
    	$ac->slug=to_slug($Request->name).time();
    	$ac->status =($Request->status)?1:0;
    	$ac->save();
    	return redirect('admin/actions/editactions/'.$id)->with('thongbao','Sửa Thành Công!');
    }
    public function getdel($id){
    	$ac = action::find($id);
    	$ac->delete();
    	return redirect('admin/actions/listactions');
    }
    public function getsearchac(Request $Request){
        $search = $Request->get('search');
        $posts = action::where('title','like','%'.$search.'%')->paginate(4);
        return view('admin/action/listaction',['intro'=>$posts]);
    }
    public function getcontentac($slug,$id){
        $gt = action::find($id);
       
        return view('pages/hoat-dong',['gt'=>$gt]);
    }
}

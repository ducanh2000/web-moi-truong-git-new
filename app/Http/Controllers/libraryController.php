<?php

namespace App\Http\Controllers;
use App\library;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    public function getadd(){
    	return view('admin/library/addlibrary');
    }
    public function postadd(Request $Request){
        
    	$this->validate($Request,
    		[
    			'title' => 'required'
    		],
    		[
    			'title.required' => 'Bạn Chưa Nhập Tên!'
    		]
    	);
        if ($Request->hasFile('vim')) {
            $file=$Request->file('vim');
            $file->move('images',$file->getClientOriginalName());
        }
    	$intro = new library;
    	$intro->title =$Request->title;
        $intro->kind =$Request->kind;
    	$intro->link =$Request->vim?$Request->vim:$Request->img;
    	$intro->save();
    	return redirect('admin/library/addlibrary')->with('thongbao','Thêm Thành Công!');
    }
    public function getlist(){
    	$intro = library::paginate(4);
    	return view('admin/library/listlibrary',['intro'=>$intro]);
    }
    public function getedit($id){
    	$intro = library::find($id);
    	return view('admin/library/editlibrary',['intro'=>$intro]);
    }
    public function postedit(Request $Request,$id){
    	$intro = library::find($id);
       
    	$intro->title =$Request->title;
        $intro->kind =$Request->kind?$Request->kind:$intro->kind;
        $intro->link =$Request->vim?$Request->vim:$intro->link;
        $intro->save();
    	return redirect('admin/library/editlibrary/'.$id)->with('thongbao','Sửa Thành Công!');
    }
    public function detail($id){
        $intro = library::find($id);
        return view('pages/video-chitiet',[
            'vddt'=>$intro
        ]);
    }

     public function getdel($id){
        $intro = library::find($id);
        $intro->delete();
        return redirect('admin/library/listlibrary');
    }
}

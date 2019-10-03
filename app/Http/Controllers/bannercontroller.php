<?php

namespace App\Http\Controllers;
use App\banner;
use Illuminate\Http\Request;
use DB;

class bannercontroller extends Controller
{
    public function getadd(){
        return view('admin/banner/addbanner');
    }
    public function postadd(Request $Request){
        $this->validate($Request,
            [
                'image' => 'required',
                'title' => 'required'
            ],
            [
                'image.required' => 'Bạn Chưa Nhập Tên!',
                'title.required' => 'Bạn Chưa Nhập Nội Dung!'
            ]
        );
        if ($Request->hasFile('image')) {
            $file=$Request->file('image');
            $file->move('images',$file->getClientOriginalName());
        }
        if ($Request->hasFile('icon')) {
            $file=$Request->file('icon');
            $file->move('images',$file->getClientOriginalName());
        }
        $ac = new banner;
        $ac->title =$Request->title;
        $ac->image =$Request->image;
        $ac->icon =$Request->icon;
        $ac->save();
        return redirect('admin/banner/addbanner')->with('thongbao','Thêm Thành Công!');
    }
    public function getlist(){
        $ac =DB::table('banner')->get();
        return view('admin/banner/listbanner',['intro'=>$ac]);
    }
    public function getedit($id){
        $ac = banner::find($id);
        return view('admin/banner/editbanner',['intro'=>$ac]);
    }
    public function postedit(Request $Request,$id){
        $ac = banner::find($id);
   
        $ac->title =$Request->title;
        $ac->image =($Request->image)?$Request->image:$ac->image;
        $ac->icon =($Request->icon)?$Request->icon:$ac->icon;
        $ac->status =($Request->status)?1:0;
        $ac->save();
        return redirect('admin/banner/editbanner/'.$id)->with('thongbao','Sửa Thành Công!');
    }
    public function getcontentac($slug,$id){
        $gt = banner::find($id);
       
        return view('pages/hoat-dong',['gt'=>$gt]);
    }
    public function getdel($id){
        $ac = banner::find($id);
        $ac->delete();
        return redirect('admin/banner/listbanner');
    }
}
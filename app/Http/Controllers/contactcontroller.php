<?php

namespace App\Http\Controllers;
use DB;
use App\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{    
    public function getlh(){                      
        return view('pages/contact');
    }
    public function postadd(Request $Request){ 
        $this->validate($Request,
            [
                'name' => 'required|min:5',
                'email' => 'required',
                'phone' => 'required|min:10|max:11',
                'content' => 'required|min:5'
            ],
            [
                'name.required' => 'Bạn Chưa Nhập Tên!',
                'email.required' => 'Bạn Chưa Nhập Email!',
                'phone.required' => 'Bạn Chưa Nhập Số Diện Thoại!',
                'content.required' => 'Bạn Chưa Nhập Nội Dung!',
            ]
        );  
        $lh = new contact;
        $lh->name =$Request->name;
        $lh->email =$Request->email;
        $lh->phone =$Request->phone;
        $lh->content =$Request->content;
        $lh->save();
        return redirect('lienhe')->with('thongbao','Cảm ơn quý khách đã liên hệ!');                    
    }
    public function getlist(){
        $data = DB::table('contact')->get();
        return view('admin/contact/listcontact',[
            'intro'=>$data
        ]);
    }
    public function getedit($id){
        $data = contact::find($id);
        return view('admin/contact/editcontact',[
            'intro'=>$data
        ]);
    }
    public function postedit(Request $Request,$id){
        $lh = contact::find($id);
        $lh->name =$Request->name;
        $lh->email =$Request->email;
        $lh->phone =$Request->phone;
        $lh->content =$Request->content;
        $lh->status =($Request->status)?1:0;
        $lh->save();
        return redirect('admin/contact/editcontact/'.$id)->with('thongbao','Sửa Thành Công!'); 
    }
    public function getdel($id){
        // dd('a');
        $lh = contact::find($id);
        $lh ->delete();
        return redirect('admin/contact/listcontact'); 
    }
    public function question(){
        $lh = DB::table('contact')->paginate(20);
        return view('pages/hoi-dap',[
            'question'=>$lh
        ]);
    }
}

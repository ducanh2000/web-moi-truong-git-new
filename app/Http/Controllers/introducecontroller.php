<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\introduce;
use App\news;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class introducecontroller extends Controller
{
    // public function __construct()
    // {  
    //     $ii = introduce::all();
    //     View::share('ii', $ii);
    // }
    public function admin(){
    	return view('admin/layout/main');
    }
    public function getadd(){
    	return view('admin/introduce/addintroduce');
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
    	$intro = new introduce;
    	$intro->name =$Request->name;
    	$intro->content =$Request->content;
    	$intro->slug=to_slug($Request->name).time();
    	$intro->save();
    	return redirect('admin/introduce/addintro')->with('thongbao','Thêm Thành Công!');
    }
    public function getlist(){
    	$intro = introduce::paginate(4);
    	return view('admin/introduce/listintroduce',['intro'=>$intro]);
    }
    public function getedit($id){
    	$intro = introduce::find($id);
    	return view('admin/introduce/editintroduce',['intro'=>$intro]);
    }
    public function postedit(Request $Request,$id){
    	$intro = introduce::find($id);
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
    	$intro->name =$Request->name;
    	$intro->content =$Request->content;
    	$intro->slug=to_slug($Request->name).time();
    	$intro->status =($Request->status)?1:0;
    	$intro->save();
    	return redirect('admin/introduce/editintro/'.$id)->with('thongbao','Sửa Thành Công!');
    }
    public function getdel($id){
        // dd('a');
    	$intro = introduce::find($id);
    	$intro->delete();
    	return redirect('admin/introduce/listintro');
    }
    // pages user
    public function getgt(){
        $intro = introduce::all();
        return view('pages/home-vn',['intro'=>$intro]);
    }
    public function getcontent($slug,$id){
        $gt = introduce::find($id);
       
        return view('pages/gioi-thieu',['gt'=>$gt]);
    }
    public function gethome(){
        $contact =DB::table('contact')->where('status',1)->limit(4)->get();
        $vimage = DB::table('library')->limit(10)->get();
        $home = DB::table('news')->limit(4)->get();
        $mt = DB::table('news')->where('kindnew','moitruong')->first();
        $mt1 = DB::table('news')->where('kindnew','moitruong')->limit(2)->get();
        $hd = DB::table('news')->where('kindnew','hoatdongqui')->first();
        $hd1 = DB::table('news')->where('kindnew','hoatdongqui')->limit(2)->get();
        $cn = DB::table('news')->where('kindnew','congnghe')->first();
        $cn1 = DB::table('news')->where('kindnew','congnghe')->limit(2)->get();
        $ht = DB::table('news')->where('kindnew','hoptacpt')->first();
        $ht1 = DB::table('news')->where('kindnew','hoptacpt')->limit(2)->get();
        return view('pages.home-vn',[
        'home'=>$home,
        'mt'=>$mt,
        'mt1'=>$mt1,
        'hd'=>$hd,
        'hd1'=>$hd1,
        'cn'=>$cn,
        'cn1'=>$cn1,
        'ht'=>$ht,
        'ht1'=>$ht1,
        'contact'=>$contact,
        'li'=>$vimage
        ]);

    }
    public function getadmin(){
        return view('admin/layout/main');
    }
    // public function getdel($id)
    // {
    //     // dd('a');
    //     DB::table('introduce')->where('id',$id)->delete();
    //     return redirect()->route('introduce.getlis');
    // }
}

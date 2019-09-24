<?php

namespace App\Http\Controllers;
use App\news;
use Illuminate\Http\Request;

class newscontroller extends Controller
{
    public function getadd(){
    	return view('admin/news/addnews');
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
        if ($Request->hasFile('images')) {
            $file=$Request->file('images');
            $file->move('images',$file->getClientOriginalName());
        }
    	$intro = new news;
    	$intro->images =$Request->images;
    	$intro->title =$Request->title;
        $intro->kindnew =$Request->kindnew;
    	$intro->summary =$Request->summary;
    	$intro->content =$Request->content;
    	$intro->slug=to_slug($Request->title).time();
    	$intro->save();
    	return redirect('admin/news/addnews')->with('thongbao','Thêm Thành Công!');
    }
    public function getlist(){
    	$intro = news::paginate(4);
    	return view('admin/news/listnews',['intro'=>$intro]);
    }
    public function getedit($id){
    	$intro = news::find($id);
    	return view('admin/news/editnews',['intro'=>$intro]);
    }
    public function postedit(Request $Request,$id){
    	$intro = news::find($id);
        $intro1 = news::find($id);
    	$this->validate($Request,
    		[
    			'title' => 'required',
                'summary' => 'required',
                'content' => 'required'
    		],
    		[
    			'title.required' => 'Bạn Chưa Nhập Tên!',
                'summary.required' => 'Bạn Chưa Nhập Tóm Tắt!',
                'content.required' => 'Bạn Chưa Nhập Nội Dung!'
    		]
    		
    			
    	);
    	$intro->images =$Request->images?$Request->images:$intro1->images;
    	$intro->title =$Request->title;
        $intro->kindnew =$Request->kindnew;
    	$intro->summary =$Request->summary;
    	$intro->content =$Request->content;
    	$intro->slug=to_slug($Request->title).time();
    	$intro->save();
    	return redirect('admin/news/editnews/'.$id)->with('thongbao','Sửa Thành Công!');
    }
    public function getdel($id){
    	$intro = news::find($id);
    	$intro->delete();
    	return redirect('admin/news/listnews');
    }
    // pages user
    public function gettt(){
        $intro = news::all();
        return view('pages/tin-tuc',['int'=>$intro]);
    }
    public function getdt($slug,$id){
        $lq= news::limit(5)->get();
        $gt = news::find($id);
       
        return view('pages/tin-tuc-chi-tiet',['gt'=>$gt,
            'intro'=>$lq
    ]);
    }
    public function getsearch(Request $Request){
        $search = $Request->get('search');
        $posts = news::where('title','like','%'.$search.'%')->paginate(4);
        return view('admin/news/listnews',['intro'=>$posts]);
    }
}

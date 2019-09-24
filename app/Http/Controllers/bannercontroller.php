<?php

namespace App\Http\Controllers;
use App\banner;
use Illuminate\Http\Request;


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
        $ac = banner::paginate(4);
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
    public function getdel($id){
        $ac = banner::find($id);
        $ac->delete();
        return redirect('admin/banner/listbanner');
    }
    public function getsearchac(Request $Request){
        $search = $Request->get('search');
        $posts = banner::where('title','like','%'.$search.'%')->paginate(4);
        return view('admin/banner/listaction',['intro'=>$posts]);
    }
    public function getcontentac($slug,$id){
        $gt = banner::find($id);
       
        return view('pages/hoat-dong',['gt'=>$gt]);
    }
}

// use Illuminate\Support\Carbon;
// use DB;
// class BannerController extends Controller
// {
//      public function getlist()
//     {
//         $banner['banner']=DB::table('banner')
//                         ->get();
//         return view('admin.page.banner.list',$banner);
//     }
//      public function getadd()
//     {
//         $array['banner']=DB::table('banner')->get();
//         return view('admin.page.banner.add',$array);
//     }

//     public function postadd(Request $request)
//     {
//         $validateData = $request->validate([
//             'image' => 'required|image',
//             'icon' => 'required|image',
//             'title' => 'required|min:2|max:255'
//         ]);

//         //move icon in to image folder 
//         $file_icon=$request->file('icon');
//         $name_icon=rand().'.'.$file_icon->getClientOriginalName();
//         $file_icon->move('images/icon_banner/',$name_icon);

//         //move image in to image folder
//         $file_img=$request->file('image');
//         $name_img=rand().'.'.$file_img->getClientOriginalName();
//         $file_img->move('images/img_banner/',$name_img);

//         DB::table('banner')->insert([
//             'icon' => $name_icon,
//             'title' => $request->title,
//             'image' => $name_img,
//             'status' => 0,
//         ]);

//         return redirect()->route('getlistbn');
//     }

//      public function edit($id)
//     {
//         $banner['banner']=DB::table('banner')->find($id);
//         return view('admin.page.banner.edit',$banner);
//     }

    
//     public function update(Request $request,$id)
//     {

//         $validateData = $request->validate([
//             'icon'=> 'image',
//             'image' => 'image',
//             'title' => 'required|min:2|max:255'
//         ]);

//         $img_old=DB::table('banner')->find($id)->image;
//         if($request->hasFile('image')){
//             $file_img=$request->file('image');
//             $name_img=rand().'.'.$file_img->getClientOriginalName();
//             if(file_exists('images/img_banner/'.$img_old)&&($img_old !='')){
//                 unlink('images/img_banner/'.$img_old);
//             }
//             $file_img->move('images/img_banner/',$name_img);
//         }else{
//             $name_img=$img_old;
//         }

//         $icon_old=DB::table('banner')->find($id)->icon;
//         if($request->hasFile('icon')){
//             $file_icon=$request->file('icon');
//             $name_icon=rand().'.'.$file_icon->getClientOriginalName();
//             if(file_exists('images/icon_banner/'.$icon_old)&&($icon_old !='')){
//                 unlink('images/icon_banner/'.$icon_old);
//             }
//             $file_icon->move('images/icon_banner/',$name_icon);
//         }else{
//             $name_icon=$icon_old;
//         }

//         if(empty($request->status)){
//             $status=0;
//         }
//         else{
//             DB::table('banner')->update(['status' => 0]);
//             $status=1;
//         }

//         DB::table('banner')->where('id',$id)->update([
//             'image' => $name_img,
//             'status' => $status,
//             'icon' => $name_icon,
//             'title' => $request->title
//         ]);

//         return redirect()->route('getlistbn');
//     }

//     public function delete($id)
//     {
//         $img_old=DB::table('banner')->find($id)->image;
//         if(file_exists('images/img_banner/'.$img_old)&&($img_old !='')){
//             unlink('images/img_banner/'.$img_old);
//         }

//         $icon_old=DB::table('banner')->find($id)->icon;
//         if(file_exists('images/icon_banner/'.$icon_old)&&($icon_old !='')){
//             unlink('images/icon_banner/'.$icon_old);
//         }
//         DB::table('banner')->where('id',$id)->delete();
//         return redirect()->route('getlistbn');
// >>>>>>> 534aa9b9d4883bd4ef0120e1a6c1149c7fcea1f2
    
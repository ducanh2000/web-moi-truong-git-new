<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class footerController extends Controller
{
     public function list()
    {
        $array['footer']=DB::table('footer')
                        ->get();
        return view('admin.footer.list',$array);
    }
     public function add()
    {
        $array['footer']=DB::table('footer')->get();
        return view('admin.footer.add',$array);
    }

    public function store(Request $request)
    {
        // dd($request);

        $validateData = $request->validate([
            'icon' => 'required|image',
            'content' => 'required|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|unique:footer,email'
        ]);
        
        if ($request->hasFile('icon')) {
            $file=$request->file('icon');
            $name=rand().'.'.$file->getClientOriginalName();

            $file->move('images/img_icon/',$name);
        }
        DB::table('footer')->insert([
            'icon' => $name,
            'content' => $request->content,
            'address'=> $request->address,
            'phone' => $request->phone,
            'email' => $request->email ,
        ]);

        return redirect()->route('footer.list');
    }

     public function edit($id)
    {
        $array['footer']=DB::table('footer')->find($id);
        return view('admin.footer.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $validateData = $request->validate([
            'content' => 'required|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email'
        ]);
        $img_old=DB::table('footer')->find($id)->icon;

        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $name=rand().'.'.$file->getClientOriginalName();
            if(file_exists('assets/img_icon/'.$img_old)&&($img_old !='')){
                unlink('assets/img_icon/'.$img_old);
            }
            $file->move('assets/img_icon/',$name);
        }
        else{
            $name=$img_old;
        }

        DB::table('footer')->where('id',$id)->update([
            'icon' => $name,
            'content' => $request->content,
            'address'=> $request->address,
            'phone' => $request->phone,
            'email' => $request->email ,
        ]);

        return redirect()->route('footer.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('footer')->find($id)->icon;
        if(file_exists('assets/img_icon/'.$img_old)&&($img_old !='')){
            unlink('assets/img_icon/'.$img_old);
        }
        DB::table('footer')->where('id',$id)->delete();
        return redirect()->route('footer.list');
    }

}

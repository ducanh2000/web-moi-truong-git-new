<?php

namespace App\Http\Controllers;
use App\models\users;
use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
	public function list()
	{
		$array['user']=DB::table('users')->get();
		return view('admin.users.list',$array);
	}

	public function add(){
		return view('admin.users.add');
	}
	public function store(Request $request)
	{
		$validateData = $request->validate([
			'email' => 'required|email|unique:footer,email'
		]);
		DB::table('users')->insert([
			'name' => $request->name,
			'email' => $request->email,
			'password' =>bcrypt($request->password),
		]);

		return redirect()->route('user.list');
	}
	public function edit($id)
	{
    	// dd('a');
		$data =users::find($id);
		return view('admin.users.edit',compact('data'));
        // compact('data') khai báo biến
	}
	public function update(Request $request,$id)
	{
		// dd('a');
		$data =users::find($id);
		// dd($data);
		$validateData = $request->validate([
			'email' => 'required|email|unique:footer,email'
		]);
		// dd($validateData);
		DB::table('users')->update([
			'name' => $request->name,
			'email' => $request->email,
			'password' =>bcrypt($request->password),
			
		]);

		return redirect()->route('user.list'.$id);
	}

	public function delete($id)
	{
		DB::table('users')->where('id',$id)->delete();
		return redirect()->route('user.list');
	}
}

@extends('master-layout')
@section('content')
	<div class="container ct" style="width: 600px">
  <form action="lienhe" style="width: 500px; margin-left: 50px" method="post">
    @csrf
    @if(session('thongbao'))
    <div class="alert alert-success">{{session('thongbao')}}</div>
    @endif
    <label for="fname">Họ Và Tên</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">
     @if($errors->has('name'))
        {{$errors->first('name')}}
      @endif
    <label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">
    @if($errors->has('email'))
        {{$errors->first('email')}}
      @endif
    <label for="lname">Số Điện Thoại</label>
    <input type="text" id="lname" name="phone" placeholder="Your phone..">
    @if($errors->has('phone'))
        {{$errors->first('phone')}}
      @endif
    <label for="subject">Nội Dung</label>
    <textarea id="subject" name="content" placeholder="Write something.." style="height:200px"></textarea>
    @if($errors->has('content'))
        {{$errors->first('content')}}
      @endif
    <input type="submit" style="margin-left: 195px" value="Submit">
  </form>
</div>
@endsection
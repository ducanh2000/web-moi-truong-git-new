@extends('admin.layout.index')
@section('main')
  <div class="container ct" style="width: 600px">
  <form action="" style="width: 500px; margin-left: 50px" method="post">
    @csrf
    @if(session('thongbao'))
    <div class="alert alert-success">{{session('thongbao')}}</div>
    @endif
    <label for="fname">Họ Và Tên</label>
    <input type="text" id="fname" name="name" value="{{$intro->name}}" placeholder="Your name..">
     @if($errors->has('name'))
        {{$errors->first('name')}}
      @endif
    <label for="lname">Email</label>
    <input type="text" id="lname" value="{{$intro->email}}" name="email" placeholder="Your email..">
    @if($errors->has('email'))
        {{$errors->first('email')}}
      @endif
    <label for="lname">Số Điện Thoại</label>
    <input type="text" id="lname" value="{{$intro->phone}}" name="phone" placeholder="Your phone..">
    @if($errors->has('phone'))
        {{$errors->first('phone')}}
      @endif
      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
                          <label for="" style="margin-left: -100px">Trạng Thái</label>
                          <input style="margin-left: 15px;" name="status" type="checkbox" 
                          @if($intro->status == 1) checked @endif></input>
                        </div>
                      </div><br>
    <label for="subject">Nội Dung</label>
    <textarea id="subject" name="content" placeholder="Write something.." style="height:200px;width: 500px">{{$intro->content}}</textarea>
    @if($errors->has('content'))
        {{$errors->first('content')}}
      @endif
    <input type="submit" style="margin-left: 195px" value="Submit">
  </form>
</div>
@endsection

@extends('admin.layout.index')

@section('main')
<div class="x_panel">
  <div class="x_title">
    <h2>Thêm Hoạt Động</h2>
    <div class="clearfix"></div>
  </div>
  <div class="box-header">
    <a href="{{route('user.list')}}" class="btn btn-primary">Danh sách</a>
  </div>
  <div class="x_content">
   <form role="form" method="POST" action="{{route('user.add')}}" enctype="multipart/form-data">
    @csrf
    <div class="box-body">

      <div class="form-group">
        <label>Tên</label>
        <input type="text" class="form-control" placeholder="Nhập tên"
        name="name" value="{{ old('name') }}">
        <p style="color:red">{{ $errors->first('name') }}</p>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" placeholder="Nhập email"
        name="email" value="{{ old('email') }}">
        <p style="color:red">{{ $errors->first('email') }}</p>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" placeholder="Nhập password"
        name="password" value="{{ old('password') }}">
        <p style="color:red">{{ $errors->first('password') }}</p>
      </div>
    </div>
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
  </form>
</div>
@stop()
@section('js')
<script src="{{asset('vendors/slug.js')}}"></script>
@stop()
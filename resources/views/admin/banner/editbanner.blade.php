@extends('admin.layout.index')
@section('main')
<div class="x_panel">
                <div class="x_title">
                  <h2>Thêm Hoạt Động</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form action="" method="POST" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                      @csrf
                      <div class="form-group">
                        @if(session('thongbao'))
                        <div class="alert alert-success">{{session('thongbao')}}</div>
                        @endif
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ảnh banner <span class="required">*</span>
                          <div id="imagePreviewimges" style="margin-left: 150px;">
                            <img style="width:100px;" src="{{asset('images/'.$intro->image)}}">
                        </div>
                        </label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="file" name="image" id="image" style="margin-left: -10px"   class="form-control col-md-7 col-xs-12">
                          @if($errors->has('image'))
                            {{$errors->first('image')}}
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                    
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Icon <span class="required">*</span>
                        </label>
                        <div id="imagePreviewimges">
                            <img style="width:100px;" src="{{asset('images/'.$intro->icon)}}">
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="file" name="icon" id="image" style="margin-left: -10px"   class="form-control col-md-7 col-xs-12">
                          @if($errors->has('icon'))
                            {{$errors->first('icon')}}
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
                          <label for="">Trạng Thái</label>
                          <input style="margin-left: 15px;" name="status" type="checkbox" 
                          @if($intro->status == 1) checked @endif></input>
                        </div>
                      </div>
                      <script>CKEDITOR.relace(Mo_ta);</script>
                      <div class="form-group">

                            <label style="float: left;" class="control-label col-md-3 col-sm-3 col-xs-12" for="inputDes">Nội Dung<span class="required">:</span></label>
                            
                            <textarea class="col-md-6 col-sm-6 col-xs-12 ckeditor"   name="title" id="Mo_ta" style="width: 655px;" rows="10">{{$intro->title}}</textarea>
                        </div>
                          <div id="alerts"></div>
                  
                  <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6">
              
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
              </div>
                
                  
              </div>
@stop()
@section('js')
<script src="{{asset('vendors/slug.js')}}"></script>
@stop()
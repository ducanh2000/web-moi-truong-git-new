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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tiêu Đề<span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" name="title" id="name" style="margin-left: -10px"   class="form-control col-md-7 col-xs-12">
                          @if($errors->has('title'))
                            {{$errors->first('title')}}
                          @endif
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Thêm Ảnh / Thêm Video <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <select name="kind" id="input"  style="padding: 6px;margin-left: -9px">
                            <option  value="image">Thêm ảnh</option>
                            <option  value="video">Thêm video</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                       
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ảnh <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="file" name="img" id="name" style="margin-left: -10px"   class="form-control col-md-7 col-xs-12">
                          @if($errors->has('vim'))
                            {{$errors->first('vim')}}
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                       
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Link video <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text" name="vim" id="name" style="margin-left: -10px"   class="form-control col-md-7 col-xs-12">
                          @if($errors->has('vim'))
                            {{$errors->first('vim')}}
                          @endif
                        </div>
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
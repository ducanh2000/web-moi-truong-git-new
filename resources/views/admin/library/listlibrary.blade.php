@extends('admin.layout.index')
@section('main')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Danh Sách Hoạt Động</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                        <table id="datatable-keytable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-keytable_info" style="position: relative;">
                            <thead>
                              <tr role="row">
                                <th>Thể Loại</th>
                                <th>Ảnh / Video</th>
                                <th>Video</th>
                                <th>Ngày Tạo</th>
                                <th>Trạng Thái</th>
                                <th>Xử Lí</th>
                              </tr>
                            </thead>
                            <tbody> 
                              @foreach($intro as $it)
                              <tr role="row" class="odd">
                               {{--  {{dd(substr('$it->link', 32, 11))}} --}}
                                <td class="sorting_1">{{$it->title}}</td>
                                <td class="sorting_1">{{$it->kind}}</td>
                                @if($it->kind == 'image')
                                <td><img src="{{asset('images/'.$it->link)}}" width="100px" alt=""></td>
                                @endif
                                @if($it->kind == 'video')
                                <td><iframe width="100px" height="80px" src="https://www.youtube.com/embed/{{substr($it->link, 32, 255)}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                                @endif
                                <td>{{$it->created_at}}</td>
                                <td>{{$it->status}}</td>
                                <td>
                                  <a class="btn bg-primary" href="editlibrary/{{$it->id}}">
                                    Sửa 
                                  </a>
                                  <a class="btn btn-danger" href="dellibrary/{{$it->id}}" onclick="return confirm('Bạn thích xóa không?')">
                                    Xóa 
                                  </a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div></div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @stop()
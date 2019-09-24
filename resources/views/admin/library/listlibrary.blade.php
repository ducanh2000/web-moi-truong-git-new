@extends('admin.layout.index')
@section('main')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Danh Sách Hoạt Động</h2>
                    <form action="{{route('getsearchlr')}}" method="get" >
                      <div class="form-group" >
                      <input type="text" name="search" style="margin-left: 20px">
                      <button type="submit" style="padding: 4px;"><i class="fa fa-search"></i></button>
                      </div>
                    </form>
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
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                        <table id="datatable-keytable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-keytable_info" style="position: relative;">
                            <thead>
                              <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 180px;">Tiêu Đề</th><th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 295px;">Thể Loại</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 175px;">Ảnh / Video</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 175px;">Video</th><th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 175px;">Ngày Tạo</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 82px;">Trạng Thái</th><th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 103px;">Xử Lí</th></tr>
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
                                  <a href="editlibrary/{{$it->id}}">
                                    Sửa |
                                  </a>
                                  <a href="dellibrary/{{$it->id}}" onclick="return confirm('Bạn thích xóa không?')">
                                    Xóa 
                                  </a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                          {{ $intro->links() }}
                        </div></div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @stop()
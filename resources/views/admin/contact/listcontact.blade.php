@extends('admin.layout.index')
@section('main')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Danh Sách Hoạt Động</h2>
                    <form action="{{route('getsearchac')}}" method="get" >
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
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 180px;">Tên</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 180px;">Số Diện Thoại</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 180px;">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 295px;">Nội Dung</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 175px;">Ngày Tạo</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 82px;">Trạng Thái</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 103px;">Xử Lí</th>
                              </tr>
                            </thead>


                            <tbody> 
                              @foreach($intro as $it)
                              <tr role="row" class="odd">
                                <td class="sorting_1">{{$it->name}}</td>
                                <td>{{$it->phone}}</td>
                                 <td>{{$it->email}}</td>
                                <td>{!!substr($it->content, 0, 255)!!}...</td>
                                <td>{{$it->created_at}}</td>
                                <td>{{$it->status}}</td>
                                <td>
                                  <a href="editcontact/{{$it->id}}">
                                    Sửa |
                                  </a>
                                  <a href="delcontact/{{$it->id}}" onclick="return confirm('Bạn thích xóa không?')">
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
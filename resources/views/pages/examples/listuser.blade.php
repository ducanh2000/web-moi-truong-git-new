
@extends('admin.layout.index')

@section('main')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <section class="content-header">
      <h1>
        Danh sách thành viên
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Danh sách thành viên</li>
      </ol>
    </section>
    </div>
    <div class="x_content">
      <div class="row">
        <div class="col-sm-12">
          <div class="card-box table-responsive">
            <table id="datatable-keytable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-keytable_info" style="position: relative;">
              <thead>
                <tr role="row">
                  <th class="col-md-2">Name</th>
                  <th class="col-md-2">Email</th>
                  <th class="col-md-2">Password</th>
                  <th class="col-md-2">Phone</th>
                  <th class="col-md-2">Level</th>
                  <th class="col-md-2">Status</th>
                  <th class="col-md-2">Chức Năng</th>
                </thead>
                <tbody> 
                  @foreach($admins as $row)
                  <tr role="row" class="odd">
                    <td >{{$row->name}}</td>
                    <td >{{$row->email}}</td>
                    <td >{{$row->password}}</td>
                    <td >{{$row->phone}}</td>
                    <td >{{ $row->role->name }}</td>
                    <td >{{$row->status}}</td>
                    <td>
                    <a class="btn bg-primary" href="editintro/{{$row->id}}">
                      <i class="fas fa-pencil-ruler"></i> Sửa</a>
                    </a>
                    <a  class="btn btn-danger" href="del/{{$row->id}}" onclick="return confirm('Bạn thích xóa không?')">
                      Xóa 
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@stop()
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
                  <th>Tên</th>
                  <th>Số Diện Thoại</th>
                  <th>Email</th>
                  <th>Nội Dung</th>
                  <th>Ngày Tạo</th>
                  <th>Trạng Thái</th>
                  <th>Xử Lí</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($intro as $it)
                <tr role="row" class="odd">
                  <td>{{$it->name}}</td>
                  <td>{{$it->phone}}</td>
                  <td>{{$it->email}}</td>
                  <td>{!!substr($it->content, 0, 255)!!}...</td>
                  <td>{{$it->created_at}}</td>
                  <td>{{$it->status}}</td>
                  <td>
                    <a href="editcontact/{{$it->id}}">
                      Sửa |
                    </a>
                    <a href="delete/{{$it->id}}" onclick="return confirm('Bạn thích xóa không?')">
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
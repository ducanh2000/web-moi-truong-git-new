@extends('admin.layout.index')
@section('main')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Danh khách hàng</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row">
        <div class="col-sm-12">
          <div class="card-box table-responsive">
            <table id="datatable-keytable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-keytable_info" style="position: relative;">
              <thead>
                <tr role="row">
                  <th>STT</th>
                  <th>Tên doanh nghiệp</th>
                  <th>Tên dự án</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Tóm tắt dự án</th>
                  <th>Xử Lí</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($customers as $it)
                <tr role="row" class="odd">
                  <td>{{$loop->index}}</td>   
                  <td>{{$it->company}}</td>
                  <td>{{$it->nameproject}}</td>
                  <td>{{$it->address}}</td>
                  <td>{{$it->phone}}</td>
                  <td>{{$it->content}}</td>
                  <td>
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
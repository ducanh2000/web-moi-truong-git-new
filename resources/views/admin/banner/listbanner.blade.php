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
                  <th>Tiêu đề</th>
                  <th>Ảnh banner</th>
                  <th>icon</th>
                  <th>Trạng Thái</th>
                  <th>Xử Lí</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($intro as $it)
                <tr role="row" class="odd">
                  <td class="sorting_1">{!!$it->title!!}</td>
                  <td><img src="{{asset('images/'.$it->image)}}" width="250" alt=""></td>
                  <td><img src="{{asset('images/'.$it->icon)}}" width="50" alt=""></td>
                  <td>{{$it->status}}</td>
                  <td>
                    <a class="btn bg-primary" href="editbanner/{{$it->id}}">
                      Sửa 
                    </a>
                    <a class="btn btn-danger" href="delbanner/{{$it->id}}" onclick="return confirm('Bạn thích xóa không?')">
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
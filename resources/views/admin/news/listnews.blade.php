@extends('admin.layout.index')

@section('main')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Danh Sách Tin Tức</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row">
        <div class="col-sm-12">
          <div class="card-box table-responsive">
            <table id="datatable-keytable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-keytable_info" style="position: relative;">
              <thead>
                <tr role="row">
                  <th>Tiêu Đề</th>
                  <th>Loại Tin</th>
                  <th>Tóm Tắt</th>
                  <th>Nội Dung</th>
                  <th>Ảnh</th>
                  <th>Ngày Tạo</th>
                  <th>Xử Lí</th>
                </tr>
              </thead>
              <tbody> 
                @foreach($intro as $it)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{substr($it->title, 0, 55)}}</td>
                  <td>{{$it->kindnew}}</td>
                  <td>{!!substr($it->summary, 0, 55)!!}</td>
                  <td>{!!substr($it->content, 0, 255)!!}</td>
                  <td><img src="{{asset('images/'.$it->images)}}" alt="" width="100px"></td>
                  <td>{{$it->created_at}}</td>
                  <td>
                    <a class="btn bg-primary" href="editnews/{{$it->id}}">
                      Sửa 
                    </a>
                    <a class="btn btn-danger" href="delnews/{{$it->id}}" onclick="return confirm('Bạn thích xóa không?')">
                      Xóa 
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div></div></div>
        </div>
        {{-- {{ $intro->links() }} --}}
      </div>
    </div>
  </div>
</div>
</div>
@stop()
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
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 180px;">Số / Ký Hiệu</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 180px;">Địa Chỉ</th><th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 295px;">Nội Dung</th><th class="sorting_asc" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 180px;">Ngày Tạo</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-keytable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 103px;">Xử Lí</th></tr>
                </thead>


                <tbody> 
                  @foreach($intro as $it)
                  <tr role="row" class="odd">
                    <td class="sorting_1">{{$it->number}}</td>
                    <td>{{$it->address}}</td>
                    <td>{!!substr($it->content, 0, 255)!!}...</td>
                    
                    <td>{{$it->created_at}}</td>
                    <td>
                      <a class="btn bg-primary" href="editdoc/{{$it->id}}">
                        Sửa 
                      </a>
                      <a class="btn btn-danger" href="deldoc/{{$it->id}}" onclick="return confirm('Bạn thích xóa không?')">
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
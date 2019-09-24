@extends('admin.layout.index')
@section('title')
    Danh sách banner
@endsection
@section('main')
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Danh sách banner
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Danh sách banner</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                <div class="box-header">
                    <a href="{{route('getaddbn')}}" class="btn btn-primary">Thêm banner</a>
                </div>
                    <div class="col-xs-12">
                            <div class="box-body">
                                <table id="datatable-keytable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-keytable_info" style="position: relative;">
                            <thead>
                                <tr role="row">
                                    <th class="col-md-2">ID</th>
                                    <th class="col-md-2">Icon</th>
                                    <th class="col-md-2">Title</th>
                                    <th class="col-md-2">Image</th>                                        
                                    <th class="col-md-2">Trạng thái</th>
                                    <th class="col-md-3">Hành động</th>
                                </tr>
                            </thead>
                             <tbody>
                                    @foreach($banner as $value)
                                        <tr >
                                            <td>{{$value->id}}</td>
                                            <td><img width="100px" src="/images/icon_banner/{{$value->icon}}"></td>
                                            <td>{{$value->title}}</td>
                                            <td><img width="100px" src="/images/img_banner/{{$value->image}}"></td>
                                            <td>{{$value->status}}</td>
                                            <td>
                                                <a class="btn btn-default" href="{{Route('banner.edit',['id'=> $value->id]) }}" title="Edit"><i class="fas fa-pencil-ruler"></i> Sửa</a>
                                                <a href="{{Route('banner.delete',['id'=> $value->id]) }}" class="btn btn-danger" onclick="return confirmAction()">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                          </table>
                            </div>
                    </div>
                </div>
                </div>
            </section>
            <b></b>
    </div>
</div>

<script language="JavaScript">
        function confirmAction() {
            return confirm("Bạn có chắc chắn không ?")
        }
        
    
    </script>

{{-- modal --}}
<div class="container container-fluid">
        <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="modal-title">Banner</h2>
                        {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button> --}}
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body" id="cont">
                        
                    </div>
                    
                        
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                    </div>
                </div>
                </div>
                
            </div>
    </div>
@stop
        

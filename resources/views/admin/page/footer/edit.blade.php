@extends('admin.layout.index')
@section('title')
    Danh sách footer
@endsection
@section('main')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Sửa footer
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Sửa footer</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                                <form role="form" method="POST" action="{{Route('footer.edit',['id'=>$footer->id])}}" enctype="multipart/form-data">
                    @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                       <div class="form-group">
                            <label>Chọn icon</label>
                            <input type="file" id="icon" name="icon" onchange="showIMG()">
                        </div>
                        <div class="form-group">
                           <script>CKEDITOR.relace(content_footer);</script> 
                            <label style="float: left;" class="control-label col-md-3 col-sm-3 col-xs-12" for="inputDes">Content<span class="required">:</span></label>
                            
                            <textarea class="col-md-6 col-sm-6 col-xs-12 ckeditor"  name="content" id="content_footer" style="width: 655px;" rows="10">{{$footer->content}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>address  </label>
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề tin tức" name="address"
                                   value="{{ $footer->address }}" >
                        </div>

                        <div class="form-group">
                            <label>phone</label>
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề tin tức" name="phone"
                                   value="{{ $footer->phone}}" >
                        </div>

                        <div class="form-group">
                            <label>email</label>
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề tin tức" name="email"
                                   value="{{ $footer->email}}" >
                        </div>
                        <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
                    </div>
                </div>
            </section>
            <b></b>
    </div>
</div>

<script language="JavaScript">
        CKEDITOR.replace('content', {
                    filebrowserBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });


                function showIMG() {
                    var fileInput = document.getElementById('image');
                    var filePath = fileInput.value; //lấy giá trị input theo id
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i; //các tập tin cho phép
                    //Kiểm tra định dạng
                    if (!allowedExtensions.exec(filePath)) {
                        alert('Bạn chỉ có thể dùng ảnh dưới định dạng .jpeg/.jpg/.png/.gif extension.');
                        fileInput.value = '';
                        return false;
                    } else {
                        //Image preview
                        if (fileInput.files && fileInput.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                document.getElementById('viewImg').innerHTML = '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                            };
                            reader.readAsDataURL(fileInput.files[0]);
                        }
                    }
                }
    
    </script>

{{-- modal --}}

    </div>
@stop
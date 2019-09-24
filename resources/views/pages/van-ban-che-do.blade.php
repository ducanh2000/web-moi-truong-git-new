@extends('master-layout')
@section('content')


<section class="document-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span style="color: #007633;">Văn bản chế độ</span>
				</div>
				<div class="document-content">
					<div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
						<table class="table table-bordered" style="margin-top: 10px;">
						  <thead class="thead-dark|thead-light">
						    <tr style="background-color: #d8e0eb; border-color: #d8e0eb;" class="document-thead">
						      <th scope="col">Số/Ký hiệu</th>
						      <th scope="col">Ngày ban hành</th>
						      <th scope="col">Nơi ban hành</th>
						      <th scope="col">Trích yếu</th>
						    </tr>
						  </thead>
						  <tbody class="document-tbody">
						  	@foreach($int as $dc)
						    <tr>
						      <td scope="row">{{$dc->number}}</td>
						      <td>{{$dc->created_at}}</td>
						      <td>{{$dc->address}}</td>
						      <td>{!!$dc->content!!}</td>
						    </tr>
						    @endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection
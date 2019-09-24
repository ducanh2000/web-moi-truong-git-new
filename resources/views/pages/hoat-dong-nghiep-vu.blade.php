@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span style="color: #007633;">Hoạt động nghiệp vụ</span>
				</div>
				<div class="about">
					<p style="color: #00b050;font-weight: bold;">Hoạt động nghiệp vụ<br></p>
					<ul style="margin-left: 30px;">
						<li><a href="{{ url('hoat-dong-nghiep-vu/cho-vay-lai-suat-uu-dai') }}">Cho vay lãi suất ưu đãi</a></li>
						<li><a href="{{ url('hoat-dong-nghiep-vu/ho-tro-lai-suat-vay-von-sau-dau-tu') }}">Hỗ trợ lãi suất vay vốn sau đầu tư</a></li>
						<li><a href="{{ url('hoat-dong-nghiep-vu/tai-tro-va-dong-tai-tro') }}">Tài trợ và đồng tài trợ</a></li>
						<li><a href="{{ url('hoat-dong-nghiep-vu/co-che-phat-trien-sach') }}">Cơ chế phát triển sạch (CDM)</a></li>
						<li><a href="{{ url('hoat-dong-nghiep-vu/tro-gia-san-pham-bao-ve-moi-truong') }}">Trợ giá sản phẩm bảo vệ môi trường</a></li>
						<li><a href="{{ url('hoat-dong-nghiep-vu/ky-quy') }}">Ký quỹ phục hồi môi trường trong khai thác khoáng sản</a></li>
						<li><a href="{{ url('hoat-dong-nghiep-vu/von-oda') }}">Vốn ODA và cho vay ủy thác</a></li>
						<li><a href="{{ url('hoat-dong-nghiep-vu/khac') }}">Các hoạt động khác</a></li>
					</ul>
				</div>
				<div>
					@include('pages/hoat-dong-nghiep-vu-tin-co-lien-quan')
				</div>
			</div>
			<div class="col-lg-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection
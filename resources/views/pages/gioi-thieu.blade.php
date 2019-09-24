@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Giới thiệu / <span style="color: #007633;">{{$gt->name}}</span>
				</div>
				<div class="about">
					<p>
						<div style="font-size: 20px; font-weight: bold; color: #000; margin-bottom: 13px;">
							{{$gt->name}}
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> {{$gt->created_at}}
						</div>
					</p>
					<div>
						<p>
							{!!$gt->content!!}
						</p>
					</div>
				</div>
				<div>
					@include('pages/gioi-thieu-tin-co-lien-quan')
				</div>
			</div>
			<div class="col-lg-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection
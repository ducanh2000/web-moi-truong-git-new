@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Hoạt động / <span style="color: #007633;">{{$gt->title}}</span>
				</div>
				<div class="about">
					<p>
						<div style="font-size: 20px; font-weight: bold; color: #000; margin-bottom: 13px;">
							{{$gt->title}}
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
					@include('pages/hop-tac-phat-trien-tin-co-lien-quan')
				</div>
			</div>
			<div class="col-lg-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection
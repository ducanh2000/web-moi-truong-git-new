@extends('master-layout')
@section('content')


<section class="news-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span style="color: #007633;">Tin tức</span>
				</div>
				<div class="news-content">
					<div class="news-member">
						@foreach($int as $tt)
						<div class="news-title">
							<a href="tin-tuc/detail/{{$tt->slug}}/{{$tt->id}}">{{$tt->title}}</a>
						</div>
						<div class="news-info">
							<div class="row">
								<div class="col-lg-3">
									<a href="tin-tuc/{{$tt->slug}}/{{$tt->id}}"><img src="{{asset('images/'.$tt->images)}}"  class="img-fluid"></a>
								</div>
								<div class="col-lg-9">
									<span style="font-size: 11px; color: #999;"><i class="far fa-clock"></i> {{$tt->created_at}}</span><br>
									{!!$tt->summary!!}
								</div>
							</div>
						</div>
						@endforeach
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
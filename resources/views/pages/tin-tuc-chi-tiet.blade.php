@extends('master-layout')
@section('content')


<section class="news-detail-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Tin tức / <span style="color: #007633;">Chi tiết</span>
				</div>
				<div class="news-content">
					<div class="font-size-23">
						{{$gt->title}}
					</div>
					<div style="font-size: 13px; color: #999; margin-bottom: 10px;">
						<i class="far fa-clock"></i> {{$gt->created_at}}
					</div>
					<div>
						<!-- <p style="text-indent: 30px;"></p> -->
						<p>
							{!!$gt->content!!}
						</p>
					</div>
				</div>
				<div>
					<div class="related-news-wrap">
						<div class="related-news-title">
							Tin liên quan
						</div>
						<div class="related-news">
							<ul>
							@foreach($intro as $in)
            					<li>
            						<a href="tin-tuc/detail/{{$in->slug}}/{{$in->id}}">{{$in->title}}</a>
            					</li>
            				@endforeach
			
							</ul>
						</div>
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
@extends('master-layout')
@section('content')

<section class="home-wrap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span > <a href="#" style="color: #007633;">Hỏi Đáp</a></span>
				</div>
				<div class="news-content1">
					
				
					<div class="question_give">
						<p><a href="lienhe">Đặt câu hỏi</a></p>
					</div>
					<div class="page_news">
						<div class="page_news_content">
							@foreach($question as $qt)
							<div>
								{{$qt->content}}?
							</div>
							<div class="address">
								{{$qt->name}} ({{$qt->email}})
							</div>
							@endforeach
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
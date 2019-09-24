@extends('master-layout')
@section('content')

<section class="lib-wrap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / <span style="color: #007633;">Thư viện</span>

				</div>

				<div class="vid-content">
					<h5 class="title-vid">
						VIDEO
					</h5>
					<div style="clear: both;"></div>
					<div class="vid-iframe">

							<div class="row">
								@foreach($intro as $video)
								@if($video->kind == 'video')
								<div class="col-lg-4 col-md-4">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe 
										src="https://www.youtube.com/embed/{{substr($video->link, 32, 255)}}">
										</iframe> 
									</div>
									<br>
									<p><a href="video-chitiet/{{$video->id}}" title="" class="sub-cont">{{$video->title}}</a></p>
								</div>
								@endif
								@endforeach
							</div>

					</div>
					<h5 class="title-vid" style="margin-top:50px;">
						HÌNH ẢNH
					</h5>

					<div style="clear: both;"></div>
					<div class="block-images">

							<div class="row">
								@foreach($intro as $images)
								@if($images->kind == 'image')
								<div class="col-lg-4 col-md-4">
									<img src="{{ asset('images/'.$images->link) }}" alt="" width="100%">

									 <br>
									<p><a href="video-chitiet/{{$images->id}}" title="" class="sub-cont">{{$images->title}}</a></p>
								</div>
								@endif
								@endforeach
							</div>

					</div>


					<div class="" style="text-align: right;font-weight: bold;margin-bottom: 100px;">(Báo TN&MT)</div>

					<div class="form-comment">
						<form>
							<h5>BÌNH LUẬN</h5>
							<textarea name="" cols="50" rows="2" class="form-control"></textarea>
							<div class="send-comment"><button class="btn btn-success send-cm">Gửi bình luận</button></div>
							<div style="clear: both;"></div>
						</form>

					</div>

				<div class="tintuc">
					<div class="row">
						<div class="col-md-3  title_tt">
							<span >TIN LIÊN QUAN</span>
						</div>
						<div class="col-md-9">
							<div class="view_date">
								Xem theo ngày 
								<select>
									<option>26</option>
									<option>2</option>
									<option>3</option>
								</select>
								<select>
									<option>Tháng 1</option>
									<option>Tháng 2</option>
									<option> Tháng 33</option>
								</select>
								<select>
									<option>2018</option>
									<option>2019</option>
									<option>2020</option>
								</select>
								<button> XEM</button>
							</div>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="row content-tt">
						<div class="col-md-4 tt">
							<img src="{{ asset('images/hop.jpg') }}">
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Eos simili</p>
						</div>
						<div class="col-md-4 tt">
							<img src="{{ asset('images/hoinghi.jpg') }}">
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Eos simili</p>
						</div>
						<div class="col-md-4 tt">
							<img src="{{ asset('images/hop.jpg') }}">
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Eos simili</p>
						</div>
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
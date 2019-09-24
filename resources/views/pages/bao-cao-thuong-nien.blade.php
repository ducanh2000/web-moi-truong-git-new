@extends('master-layout')
@section('content')


<section class="report-wrap">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<div class="a-link">
					Trang chủ / <span > <a href="#" style="color: #007633;">Báo cáo thường nhiên</a></span>
				</div>
				<div class="news-content">
					<div class="report-detail first">
						<span class="date_time">20/04/2014</span>
						<span> <b> Công bố thu nhập Ban điều hành năm 2014</b></span>
						<span class="download"> <a href="#"><i class="fas fa-download" ></i> Tải về tại đây </a></span>
					</div>
					<div class="report-detail">
						<span class="date_time">20/04/2014</span>
						<span> <b> Công bố thu nhập Ban điều hành năm 2014</b></span>
						<span class="download"> <a href="#"><i class="fas fa-download" ></i> Tải về tại đây </a></span>
					</div>
					<div class="report-detail">
						<span class="date_time">20/04/2014</span>
						<span> <b> Công bố thu nhập Ban điều hành năm 2014</b></span>
						<span class="download"> <a href="#"><i class="fas fa-download" ></i> Tải về tại đây </a></span>
					</div>
					<div class="report-detail">
						<span class="date_time">20/04/2014</span>
						<span> <b> Công bố thu nhập Ban điều hành năm 2014</b></span>
						<span class="download"> <a href="#"><i class="fas fa-download" ></i> Tải về tại đây </a></span>
					</div>
					<div class="report-detail last">
						<span class="date_time">20/04/2014</span>
						<span> <b> Công bố thu nhập Ban điều hành năm 2014</b></span>
						<span class="download"> <a href="#"><i class="fas fa-download" ></i> Tải về tại đây </a></span>
					</div>
				</div>
				<div class="tintuc">
					<div class="row">
						<div class="col-md-3  title_tt">
							<span >TIN TỨC</span>
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
						<div class="col-md-4 tt">
							<img src="{{ asset('images/hoinghi.jpg') }}">
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Eos simili</p>
						</div>
						<div class="col-md-4 tt">
							<img src="{{ asset('images/hop.jpg') }}">
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Eos simili</p>
						</div>
						<div class="col-md-4 tt">
							<img src="{{ asset('images/hoinghi.jpg') }}">
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Eos simili</p>
						</div>

					</div>
					<div class="row content-left-row news">
					    <div class="col-md-12 news-container">
					        <div class="row">
					            <div class="col-md-2 news-header">MULTIMEDIA</div>
					            <div class="col-md-10 news-header2">Photos | Video</div>
					        </div>
					        <div class="slide2 owl-carousel owl-theme">
					            <div class="item"><img src="{{ asset('images/hoinghi.jpg') }}">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste amet vero</p>
					            </div>
					            <div class="item"><img src="{{ asset('images/hoinghi.jpg') }}">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste amet vero</p>
					            </div>
					            <div class="item"><img src="{{ asset('images/hoinghi.jpg') }}">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste amet vero</p>
					            </div>
					            <div class="item"><img src="{{ asset('images/hoinghi.jpg') }}">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste amet vero</p>
					            </div>
					            <div class="item"><img src="{{ asset('images/hoinghi.jpg') }}">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste amet vero</p>
					            </div>
					            <div class="item"><img src="{{ asset('images/hoinghi.jpg') }}">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, iste amet vero</p>
					            </div>
					        </div>
					    </div>
					<div style="clear: both;"></div>
				</div>
				<div class="row content-left-row news">
				    <div class="col-md-12 news-container">
				        <div class="row">
				            <div class="col-md-2 news-header">FQA</div>
				            <div class="col-md-10 news-header2">Send questions</div>
				        </div>
				    </div>
				    <div class="questions">
				        <div class="row">
				            <div class="col-md-6 left_questions">
				                <p>
				                    <span>1.</span> I want to carry out a project to filter industrial waste gas before discharging it
				                    into the environment. Please ask which funding source to support the project development?
				                    <p class="detail"><a href="#">Detail >></a></p>
				                    <div style="clear: both;"></div>
				                </p>
				                <p>
				                    <span>3.</span>Dear Vietnam Environmental Protection Fund, I am from Sung Mun Environment Co., Ltd.
				                    At present, our company wants to build the company's waste water treatment system located in the
				                    Industrial Park, I want to ask the conditions. Which loan to get money from the Fund and I have to
				                    prepare documents and procedures to get a loan? Sincerely thank.
				                    <p class="detail"><a href="#"> Detail >></a></p>
				                </p>
				            </div>
				            <div class="col-md-6 ">
				                <p>
				                    <span>2.</span> I want to carry out a project to filter industrial waste gas before discharging it
				                    into the environment. Please ask which funding source to support the project development?
				                    <p class="detail"><a href="#"> Detail >></a></p>
				                    <div style="clear: both;"></div>
				                </p>
				                <p>
				                    <span>4.</span>Dear Vietnam Environmental Protection Fund, I am from Sung Mun Environment Co., Ltd.
				                    At present, our company wants to build the company's waste water treatment system located in the
				                    Industrial Park, I want to ask the conditions. Which loan to get money from the Fund and I have to
				                    prepare documents and procedures to get a loan? Sincerely thank.
				                    <p class="detail"><a href="#"> Detail >></a></p>
				                </p>
				            </div>

				        </div>
				    </div>
				    <div style="clear: both;"></div>
				</div>
					
				</div>
			</div>
			<div class="col-md-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection
@extends('master-layout2')
@section('content')
<section class="home-wrap">
    @if(isset($check))
<script type="text/javascript">
    confirm("Bạn đã gửi thông tin thành công")
</script>
@endif
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-9">
                <div class="row content-left-row main-banner">
                    <div class="col-md-7 left_main_banner">
                          <div class="slide owl-carousel owl-theme">

                            @foreach($home as $h)

                            <div class="item"> <a href="{{ route('tai-tro') }}"><img src="images/{{$h->images }}"> </a>
                                <p class="title-img lang" key="eng"> <a href="tin-tuc/detail/{{$h->slug}}/{{$h->id}}">{{$h->title}}</a></p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-5 right_main_banner">
                        @foreach($home as $hh)
                        <div class="row sub-content mt-3">
                            <div class="col-md-4 sub-image"><img src="images/{{$hh->images }}"></div>
                            <div class="col-md-8 sub-title lang" key="eng">
                                <a href="tin-tuc/detail/{{$hh->slug}}/{{$hh->id}}">{{$hh->title}}</a> 
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row content-left-row banner">
                    <img src="images/banner.png">
                </div>
                <div class="row content-left-row news">
                    <div class="col-md-6">
                        <div class="news-container" style="padding-right: 15px">
                            <div class="row">
                                <div class="col-md-10 news-header lang" key="hd-quy">Tin hoạt động của quỹ</div>
                                <div class="col-md-2 news-header2"></div>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="box-news">

                                <div class="row news-main">
                                    <div class="col-md-6 news-main-img"><img src="images/{{ $hd->images}}" class="fiximg"></div>
                                    <div class="col-md-6 news-main-title lang" key="eng"><a href="tin-tuc/detail/{{$hd->slug}}/{{$hd->id}}">{{$hd->title}}</a>
                                        <p><i class="far fa-clock"></i><span>{{$hd->created_at}}</span></p>
                                    </div>
                                    <div>
                                        <ul>
                                            @foreach($hd1 as $key => $lq)
                                            <li class="lang" key="eng">
                                                <a href="tin-tuc/detail/{{$lq->slug}}/{{$lq->id}}">{{$lq->title}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div style="width:100%;">
                                            <div class="btn see_more lang" key="more"> <a href ="tin-tuc/detail/{{$hd->slug}}/{{$hd->id}}"> XEM THÊM >> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="news-container">
                                <div class="row">
                                    <div class="col-md-10 news-header lang" key="hd-quy">TIN MÔI TRƯỜNG</div>
                                    <div class="col-md-2 news-header2"></div>
                                </div>
                                <div style="clear: both;"></div>
                                <div class="box-news">
                                    <div class="row news-main">
                                        <div class="col-md-6 news-main-img"><img src=" images/{{$mt->images }} " class="fiximg"></div>
                                        <div class="col-md-6 news-main-title lang" key="hd-quy"><a href="tin-tuc/detail/{{$mt->slug}}/{{$mt->id}}">{{$mt->title}}
                                            <p><i class="far fa-clock"></i><span>{{$mt->created_at}}</span></p>

                                        </div>
                                        <div>
                                            <ul>
                                                @foreach($mt1 as $m)
                                                <li class="lang" key="eng"><a href="tin-tuc/detail/{{$m->slug}}/{{$m->id}}">{{$m->title}}</a> </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div style="width:100%;">
                                            <div class="btn see_more lang" key="more"> <a href ="tin-tuc/detail/{{$mt->slug}}/{{$mt->id}}"> XEM THÊM >> </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row content-left-row news">
                    <div class="col-md-6">
                        <div class="news-container" style="padding-right: 15px;">
                            <div class="row">
                                <div class="col-md-10 news-header lang" key="hd-quy">HỢP TÁC PHÁT TRIỂN</div>
                                <div class="col-md-2 news-header2"></div>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="box-news">

                                <div class="row news-main">
                                    <div class="col-md-6 news-main-img"><img src="images/{{ $ht->images}}" class="fiximg"></div>
                                   
                                    <div class="col-md-6 news-main-title lang" key="hd-quy"><a href="tin-tuc/detail/{{$ht->slug}}/{{$ht->id}}">{{$ht->title}}</a>
                                        <p><i class="far fa-clock"></i><span>{{$ht->created_at}}</span></p>
                                    </div>
                                    <div>
                                        <ul>
                                            @foreach($ht1 as $l)
                                            <li class="lang" key="eng"><a href="#"><a href="tin-tuc/detail/{{$l->slug}}/{{$l->id}}">{{$l->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div style="width:100%;">
                                        <div class="btn see_more lang" key="more"> <a href ="tin-tuc/detail/{{$ht->slug}}/{{$ht->id}}"> XEM THÊM >> </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-container">
                            <div class="row">
                                <div class="col-md-10 news-header lang" key="hd-quy">KHOA HỌC CÔNG NGHỆ</div>
                                <div class="col-md-2 news-header2"></div>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="box-news">
                                <div class="row news-main">
                                    <div class="col-md-6 news-main-img"><img src="images/{{$cn->images }}" class="fiximg"></div>
                                    <div class="col-md-6 news-main-title lang" key="eng"> <a href="tin-tuc/detail/{{$cn->slug}}/{{$cn->id}}">{{$cn->title}}</a>
                                        <p><i class="far fa-clock"></i><span>{{$cn->created_at}}</span></p>
                                    </div>
                                    <div>
                                        <ul>
                                            @foreach($cn1 as $a)
                                            <li class="lang" key="eng"><a href="tin-tuc/detail/{{$a->slug}}/{{$a->id}}">{{$a->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div style="width:100%;">
                                        <div class="btn see_more lang" key="more"> <a href ="tin-tuc/detail/{{$cn->slug}}/{{$cn->id}}"> XEM THÊM >> </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active lang" key="hoidap" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Hỏi Đáp</a>
                        <a class="nav-item nav-link lang" key="gui-cauhoi" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Gửi Câu Hỏi</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="questions">
                                <div class="row">

                                    <div class="col-md-6 left_questions">

                                        @foreach($contact as $key => $ct)
                                        @if($key < 2)
                                        <p class="lang" key="toimuon">
                                            <span>{{++$key}}.</span>{{$ct->content}}?
                                            <p class="detail lang" key="more"><a href="#">Chi Tiết >></a></p>
                                            <div style="clear: both;"></div>
                                        </p>
                                        @endif
                                        @endforeach
                                    </div>

                                    <div class="col-md-6 right_questions">
                                        @foreach($contact as $key => $ct)
                                        @if($key >= 2)
                                        <p class="lang" key="toimuon">
                                            <span>{{$key+1}}.</span>{{$ct->content}}? 
                                            <p class="detail lang" key="more"><a href="#">Chi Tiết>></a></p>
                                            <div style="clear: both;"></div>
                                        </p>
                                        @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="questions" >
                                <div class="row">
                                    <div class="col-md-6 send-ques">
                                        <div class="container ct" style="width: 600px">
                                            <form action="lienhe" style="width: 500px; margin-left: 50px" method="post">
                                                @csrf
                                                @if(session('thongbao'))
                                                <div class="alert alert-success">{{session('thongbao')}}</div>
                                                @endif
                                                <label style="width: 150px" for="fname">Họ Và Tên :</label>
                                                <input type="text" id="fname" name="name" placeholder="Your name..">
                                                <br>
                                                @if($errors->has('name'))
                                                {{$errors->first('name')}}
                                                @endif
                                                <label style="width: 150px" for="lname">Email :</label>
                                                <input type="text" id="lname" name="email" placeholder="Your email..">
                                                <br>
                                                @if($errors->has('email'))
                                                {{$errors->first('email')}}
                                                @endif
                                                <label style="width: 150px" for="lname">Số Điện Thoại :</label>
                                                <input type="text" id="lname" name="phone" placeholder="Your phone..">
                                                <br>
                                                @if($errors->has('phone'))
                                                {{$errors->first('phone')}}
                                                @endif
                                                <label style="width: 150px" for="subject">Nội Dung :</label>
                                                <textarea id="subject" name="content" placeholder="Write something.." style="height:200px"></textarea>
                                                @if($errors->has('content'))
                                                {{$errors->first('content')}}
                                                @endif
                                                <input type="submit" style="margin-left: 195px" value="Submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                        </div>
                </div>


                <nav>
                    <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                        <a class="nav-item nav-link active lang" key="thuvien" id="nav-home-tab1" data-toggle="tab" href="#nav-home1" role="tab" aria-controls="nav-home" aria-selected="true">THƯ VIỆN</a>
                        <a class="nav-item nav-link lang" id="nav-profile-tab1" key="ha-vd" data-toggle="tab" href="#nav-profile1" role="tab" aria-controls="nav-profile" aria-selected="false">Hình ảnh | Video</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent1">
                    <div class="tab-pane fade show active" id="nav-home1" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="slide2 owl-carousel owl-theme">
                            @foreach($li as $l)
                            @if($l->kind == 'image')
                            <div class="item"><img class="img-tent" src="images/{{$l->link}}">
                                <p class="lang" key="eng"><a href="video-chitiet/{{$l->id}}">{{$l->title}}</a></p>
                            </div>
                            @endif
                            @endforeach
                            @foreach($li as $l)
                            @if($l->kind == 'video')
                            <div class="item">
                                <p class="lang" key="eng">
                                    <iframe width="100%" height="200px" src="https://www.youtube.com/embed/{{substr($l->link, 32, 255)}}" ></iframe>
                                    <p class="lang" key="eng"><a href="video-chitiet/{{$l->id}}">{{$l->title}}</a></p>
                                </p>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile1" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="vid-content" style="width: 500px">
                            <h5 class="title-vid">
                                VIDEO
                            </h5>
                            <div style="clear: both;"></div>
                            <div class="vid-iframe">

                                <div class="row">
                                        @foreach($li as $video)
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
                                    @foreach($li as $images)
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
                        </div>
                    </div>

                </div> 
            </div>
            <div class="col-md-3">
                <div class="content">
                    {{-- <div class=" customer-info">
                        <h6 class="lang" key="dangky-vayvon">đăng ký vay vốn ưu đãi</h6>
                    </div> --}}
                    @include('menu-right')
                        {{-- @extend() --}}
                    {{-- <form id="form-info" action="{{route('postinfo')}}" method="post">
                        <div class="form-group">
                            <label class="lang" key="ten-cty" for=""><strong>Tên doanh nghiệp<span style="color:red;">*</span></strong></label>
                            <input type="text" class="form-control"  id="exampleInput1" aria-describedby="emailHelp">

                        </div>
                        <div class="form-group">
                            <label class="lang" key="ten-duan" for=""><strong>Tên dự án<span style="color:red;">*</span></strong></label>
                            <input type="text" class="form-control" id="exampleInput2">
                        </div>
                        <div class="form-group">
                            <label class="lang" key="dia-chi" for=""><strong>Địa chỉ<span style="color:red;">*</span></strong></label>
                            <input type="text" class="form-control" id="exampleInput3">
                        </div>
                        <div class="form-group">
                            <label class="lang" key="sodienthoai" for=""><strong>Số điện thoại<span style="color:red;">*</span></strong></label>
                            <input type="text" class="form-control" id="exampleInput4">
                        </div>
                        <div class="form-group">
                            <label class="lang" key="duan" for=""><strong>Tóm tắt nội dung dự án<span style="color:red;">*</span></strong></label>
                            <textarea name="" cols="32" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="btn-send-info">
                            <button type="submit" class="btn btn-primary lang" key="sent">Gửi thông tin</button>
                        </div>

                    </form>  --}}

                    <div class="adv">
                        <img src="images/adv.jpg" alt="" class="img-fluid">

                        <div class="img-text lang" key="lai-suat">
                            Mức lãi suất cho vay ưu đãi các dự án đầu tư 
                            bảo vệ môi trường 
                            năm 2019 là 2.6%/năm hoặc 3.6%/năm
                            <br><br>
                            Mức hỗ trợ lãi suất 
                            sau đầu tư cho các dự án 
                            bảo vệ môi trường
                            năm 2019 là 2,4%/năm
                        </div>
                    </div> <!-- hết adv -->

                    <div class="services">
                        <div class="title-services">
                            <h6 class="lang" key="hoatdong-nghiepvu">HOẠT ĐỘNG NGHIỆP VỤ</h6>
                        </div>
                        <ul class="form-inner">
                            <li>
                                <img src="images/sv1.png" alt="">
                                <span class="lang" key="cho-vay">Cho vay lãi suất ưu đãi</span>
                            </li>
                            <li> <img src="images/sv2.png" alt="">
                                <span class="lang" key="taitro">Tài trợ và đồng tài trợ</span>
                            </li>
                            <li> <img src="images/sv3.png" alt="">
                                <span class="lang" key="y-quy">ý quỹ cải tạo phục hồi môi trường trong khai thác khoáng sản</span>
                            </li>
                            <li> <img src="images/sv4.png" alt="">
                                <span class="lang" key="kinhte-xanh">Kinh tế xanh</span>
                            </li>
                            <li> <img src="images/sv5.png" alt="">
                                <span class="lang" key="GEF">Văn phòng GEF Việt Nam</span>
                            </li>
                            <li> <img src="images/sv6.png" alt="">
                                <span class="lang" key="khac">Các hoạt động khác</span>
                            </li>
                        </ul>

                    </div> <!-- hết services -->

                    <div class="meeting-online">
                        <img src="images/adv2.jpg" alt="">
                        <div class="sub-text lang" key="hop">HỌP TRỰC TUYẾN</div>
                    </div>

                    <div class="adv2">
                        <img src="images/dubao.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="link">
                        <div class="title-link">
                            <h6 class="lang" key="lk-trang">Liên Kết Trang</h6>
                        </div>
                        <form action="" id="form-link">
                            <br>
                            <select class="form-control">
                                <option class="lang" key="bo-nganh" value="Ministry, Industry, Local">Bộ, Ngành, Địa Phương</option>
                                <option class="lang" key="bo-nganh" value="Ministry, Industry, Local 2">Bộ, Ngành, Địa Phương 2</option>
                                <option class="lang" key="bo-nganh" value="Ministry, Industry, Local 3">Bộ, Ngành, Địa Phương 3</option>
                            </select>

                            <select class="form-control">
                                <option class="lang" key="cac-don-vi" value="Career units">Các đơn vị sự kiện</option>
                                <option class="lang" key="cac-don-vi" value="Career units 2">Đơn vị 2</option>
                                <option class="lang" key="cac-don-vi" value="Career units 3">Đơn vị 3</option>
                            </select>
                            <br>
                        </form>
                    </div> <!-- hết link -->

                    <div class="access-time">
                        <div class="title-link">
                            <h6 class="lang" key="thongke">thống kê truy cập</h6>
                        </div>
                        <div class="number">
                            <div class="num1 lang" key="onl">
                                Đang Online <br>
                                <span>65</span>
                            </div>
                            <div class="num2 lang" key="luot">
                                Lượt truy cập <br>
                                <span>2044189</span>
                            </div>
                            <div style="clear: both;"></div>
                        </div>

                    </div><!--  hết access-time -->
                </div>


            </div>
        </div>
    </div>
</section>

@endsection
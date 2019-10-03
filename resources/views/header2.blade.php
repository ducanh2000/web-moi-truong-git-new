
<header id="header" style="
    background-image: url({{asset('images/bg-header.jpg')}});
  ">
    <div id="logo"><img src="images/logo.png" alt=""> <br>
        <h4>VEPF</h4>
    </div>
    <div id="h-right">
        {{-- <h3 class="lang" key="quy-bao-ve-mt">{!!$banner[0]->title!!}</h3> --}}
        <h4 class="lang" key="quy-bao-ve-en">Quỹ bảo vệ môi trường việt nam</h4>
    </div>
    <div style="clear: both;"></div>
    <div class="menu">
        <nav class="navbar navbar-expand-sm navbar-light" style="padding: 0px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentXL"
                aria-controls="navbarSupportedContentXL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContentXL">
                <ul class="navbar-nav mr-auto" style="height: 100%;">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('xxx') }}"><i class="fas fa-home"></i> <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle lang" href="#" id="navbarDropdownXL" role="button" key="gioithieu"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Giới thiệu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownXL">
                            @foreach($intro as $in)
                            <a class="dropdown-item" href="gioithieu/{{$in->slug}}/{{$in->id}}">
                                {{$in->name}}
                            </a>
                            <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle lang" href="#" id="navbarDropdownXL" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" key="tintuc">
                            Tin Tức
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownXL">
                            @foreach($intro1 as $in1)
                            <a class="dropdown-item" href="dichvu/{{$in1->slug}}/{{$in1->id}}">
                                {{$in1->title}}
                            </a>
                            <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle lang" href="#" id="navbarDropdownXL" role="button" key="hoatdong-nghiepvu"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hoạt động nghiệp vụ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownXL">
                            @foreach($intro2 as $in2)
                            <a class="dropdown-item" href="hoatdong/{{$in2->slug}}/{{$in2->id}}">
                                {{$in2->title}}
                            </a>
                            <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" href="tin-tuc" id="navbarDropdownXL" role="button" key="hoptac-quocte">
                            Hợp Tác Quốc Tế
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang" href="van-ban" key="vb">Văn bản QPPL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bao-cao">Báo Cáo Thường Niên</a>
                    </li>
                    {{-- <li class="nav-item active">
                      <a class="nav-link" href="#"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item lang" key="gioithieu">
                      Giới thiệu
                      <ul>
                        <li><a href="{{ url('gioi-thieu/gioi-thieu-chung') }}">Giới thiệu chung</a></li>
                        <li><a href="{{ url('gioi-thieu/chuc-nang-nhiem-vu') }}">Chức năng nhiệm vụ</a></li>
                        <li><a href="{{ url('gioi-thieu/co-cau-to-chuc') }}">Cơ cấu tổ chức</a></li>
                    </ul>
                </li>
                <li class="nav-item lang" key="hoatdong-nghiepvu">
                    Hoạt động nghiệp vụ
                    <ul>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/cho-vay-lai-suat-uu-dai') }}">Cho vay lãi suất ưu
                        đãi</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/ho-tro-lai-suat-vay-von-sau-dau-tu') }}">Hỗ trợ lãi
                        suất vay vốn sau đầu tư</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/tai-tro-va-dong-tai-tro') }}">Tài trợ và đồng tài
                                trợ</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/co-che-phat-trien-sach') }}">Cơ chế phát triển sạch
                                (CDM)</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/tro-gia-san-pham-bao-ve-moi-truong') }}">Trợ giá sản
                                phẩm bảo vệ môi trường</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/ky-quy') }}">Ký quỹ phục hồi môi trường trong khai thác
                                khoáng sản</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/von-oda') }}">Vốn ODA và cho vay ủy thác</a></li>
                        <li><a href="{{ url('hoat-dong-nghiep-vu/khac') }}">Các hoạt động khác</a></li>
                    </ul>
                </li>
                <li class="nav-item lang" key="hoptac-phattrien">
                    Hợp tác phát triển
                    <ul>
                        <li><a href="{{ url('hop-tac-phat-trien/qh-quoc-te') }}">Quan hệ với tổ chức quốc tế</a></li>
                        <li><a href="{{ url('hop-tac-phat-trien/qh-trong-nuoc') }}">Quan hệ với tổ chức trong nước</a>
                        </li>
                        <li><a href="{{ url('hop-tac-phat-trien/ht-quoc-te') }}">Dự án và hoạt động hợp tác quốc tế</a>
                        </li>
                        <li><a href="{{ url('hop-tac-phat-trien/ht-trong-nuoc') }}">Dự án và hoạt động hợp tác trong
                                nước</a></li>
                    </ul>
                </li>
                <li class="nav-item lang" key="tintuc">
                    <a href="{{ url('tin-tuc') }}">Tin tức</a>
                </li>
                <li class="nav-item lang" key="vanban-chedo">
                    <a href="{{ url('van-ban-che-do') }}">Văn bản chế độ</a>
                </li>
                <li class="nav-item lang" key="baocao">
                    <a href="{{ url('bao-cao-thuong-nien') }}">Báo cáo thường niên</a>
                </li> --}}

                </ul>
                <div style="padding: 5px 0;">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 lang" key="tim" type="search" placeholder="" aria-label=""
                            style="padding:0rem .75rem; height: 26px;">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                                class="fas fa-search"></i></button>
                    </form>
                </div>
        </nav>
    </div>
    <div class="bottom-header">
        <div class="row">
            <div class="col-md-3 left_btm lang" key="date">
                <i class="far fa-calendar-alt"></i> Thứ Ba, 07/04/2019 15:39 GMT +7
            </div>
            <div class="col-md-9 right_btm">
                <ul class="menu2">
                    <li><a class="abc" style="border: none;"><i class="fas fa-folder-open " ></i><a class="lang" key="thuvien" href="{{ route('thu-vien') }}" style="border: none;">Thư Viện</a> </a>
                    </li>
                    <!-- <li><a href="#"><i class="fas fa-comment-dots"></i>FQA</a></li> -->

                  <!--   <li><a href="#" style="border: none;"><i class="fas fa-folder-open"></i>Multimedia</a></li> -->
                    <li> <a class="abc"><i class="fas fa-comment-dots"></i><a class="lang" href="{{  route('hoi-dap')}} " key="hoidap">Hỏi Đáp</a> </a>
                    </li>
                    <li><a class="abc"><i class="fas fa-id-card " ></i><a class="lang" href="lienhe" key="lienhe">Liên Hệ</a></li></a>
                    <li><a class="abc"><i class="fas fa-envelope "></i><a class="lang" href="#" key="thudientu">Thư Điện Tử</a></li></a>
                    <li><a class="abc"><i class="fas fa-rss-square " key=""></i><a class="lang" href="#">RSS</a></li></a>
                    <li><a class="abc"><i class="fas fa-sitemap "></i><a class="lang" href="#"  key="sodo">Sơ đồ</a></li></a>
                    <li><a class="abc"><i class="fas fa-user "></i><a class="lang" href="admin/login"  key="dangnhap">Đăng Nhập</a></li></a>
                    <li><a class="abc"><a class=" lang translate" id="en" href="javascript:void(0)"><i class="fas fa-flag" ></i>English</a></li></a>
                    <li><a class="abc"><a class="lang translate" id="vie" href="javascript:void(0)"><i class="fas fa-flag" ></i>VietNamese</a></li></a>
                </ul>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</header>



<!-- finish menu -->

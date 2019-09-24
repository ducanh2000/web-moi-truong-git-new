
<header id="header" style="
    background-image: url({{asset('images/bg-header.jpg')}});
    ">
    <div id="logo"><img src="images/logo.png" alt=""> <br>
        <h4>VEPF</h4>
    </div>
    <div id="h-right">
        <h3>Viet nam environment protection fund</h3>
        <h4>Quỹ bảo vệ môi trường việt nam</h4>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownXL" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About us
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownXL" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Forms of services
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownXL" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cooperation and development
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
                        <a class="nav-link" href="tin-tuc" id="navbarDropdownXL" role="button">
                            News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="van-ban">Legal documents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bao-cao">Annual report</a>
                    </li>
                </ul>
                <div style="padding: 5px 0;">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Input keyword" aria-label=""
                            style="padding:0rem .75rem; height: 26px;">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                                class="fas fa-search"></i></button>
                    </form>
                </div>
        </nav>
    </div>
    <div class="bottom-header">
        <div class="row">
            <div class="col-md-3 left_btm">
                <i class="far fa-calendar-alt"></i> Thursday, 07/04/2019 15:39 GMT +7
            </div>
            <div class="col-md-9 right_btm">
                <ul class="menu2">
                    <li><a href="{{ route('thu-vien') }}" style="border: none;"><i class="fas fa-folder-open"></i>Multimedia</a></li>
                    <!-- <li><a href="#"><i class="fas fa-comment-dots"></i>FQA</a></li> -->

                  <!--   <li><a href="#" style="border: none;"><i class="fas fa-folder-open"></i>Multimedia</a></li> -->
                    <li><a href="{{  route('hoi-dap')}}"><i class="fas fa-comment-dots"></i>FQA</a>
                    </li>
                    <li><a href="lienhe"><i class="fas fa-id-card"></i>Contact</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i>Email</a></li>
                    <li><a href="#"><i class="fas fa-rss-square"></i>RSS</a></li>
                    <li><a href="#"><i class="fas fa-sitemap"></i>SiteMap</a></li>
                    <li><a href="lienhe"><i class="fas fa-user"></i>Login</a></li>
                    <li><a href="#"><i class="fas fa-flag"></i>Vietnamese</a></li>
                </ul>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
</header>

<!-- finish menu -->

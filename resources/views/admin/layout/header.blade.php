<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>ADMIN</span></a>
    </div>

    <div class="clearfix"></div>

    {{-- <<<<<<< HEAD --}}
    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <h2>@if (Auth::check())
          {{ Auth::user()->name }}
        @endif</h2>
        <h2><a href="#"><i class="fa fa-circle text-success"></i> Online</a></h2>
      </div>
    </div>
    <br/>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Quản lí chung</h3>
        <ul class="nav side-menu">
          <li><a href="{{route('index')}}"><i class="fa fa-home"></i> Trang Chủ </a>
          </li>
          <li><a><i class="fa fa-edit"></i> Giới Thiệu <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              {{-- <<<<<<< HEAD --}}
              <li><a href="{{route('getadd')}}">Thêm Giới Thiệu</a>
              </li>
              <li><a href="{{route('getlist')}}">Danh Sách Giới Thiệu</a>
              </li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Thư Viện <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('getaddlr')}}">Thêm Ảnh\Video</a></li>
              <li><a href="{{route('getlistlr')}}">Danh Sách Ảnh\Video</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-desktop"></i> Dịch Vụ <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('getaddsv')}}">Thêm Dịch Vụ</a>
              </li>
              <li><a href="{{route('getlistsv')}}">Danh Sách Dịch Vụ</a>
              </li>
            </ul>
          </li>
          <li><a><i class="fa fa-table"></i> Hoạt Động Nghiệp Vụ  <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('getaddac')}}">Thêm Hoạt Động</a>
              </li>
              <li><a href="{{route('getlistac')}}">Danh Sách Hoạt Động</a>
              </li>
            </ul>
          </li>
          <li><a><i class="fa fa-bar-chart-o"></i> Tin Tức <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('getaddn')}}">Thêm Tin Tức</a></li>
              <li><a href="{{route('getlistn')}}">Danh Sách Tin Tức</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-clone"></i> Văn Bản QPPL <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('getadddoc')}}">Thêm Văn Bản</a></li>
              <li><a href="{{route('getlistdoc')}}">Danh Sách Văn Bản</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Banner <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('getaddbn')}}">Thêm Banner</a></li>
              <li><a href="{{route('getlistbn')}}">Danh Sách Banner</a></li>
            </ul>

          </li>
          <li><a><i class="fa fa-edit"></i> Footer <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{route('footer.add')}}">Thêm Footer</a></li>
              <li><a href="{{route('footer.list')}}">Danh Sách Footer</a></li>
            </ul>
          </li>
          <li class="header">ACCOUNT</li>
          <li><a><i class="fa fa-edit"></i> Quyền <span class="fa fa-chevron-down"></span></a>
           <ul class="nav child_menu">
            <li><a href="{{route('listtit')}}"><i class="fa fa-circle-o text-red"></i> <span>List Member</span></a></li>
            <li><a href="{{route('register')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Add Member</span></a></li>
          </ul>

          {{-- <li class="header">user</li> --}}
          <li><a><i class="fa fa-edit"></i> User <span class="fa fa-chevron-down"></span></a>
           <ul class="nav child_menu">
            <li><a href="{{route('user.list')}}"><i class="fa fa-circle-o text-red"></i> <span>Danh sách user</span></a></li>
            <li><a href="{{route('user.add')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Thêm user</span></a></li>
          </ul>
        </ul>
      </div>
      <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">
          <li><a href="{{route('getlistcon')}}"><i class="fa fa-windows"></i> Câu hỏi khách hàng </a>             
          </li>
        </ul>
        <ul class="nav side-menu">
          <li><a href="{{route('getlistin')}}"><i class="fa fa-windows"></i> Khách hàng liên hệ </a>             

          </li>
        </ul>

      </div>



    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>

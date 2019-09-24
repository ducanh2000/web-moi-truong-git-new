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
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

{{-- ======= --}}
    <!-- menu profile quick info -->
    {{-- <div class="profile clearfix">
      <div class="profile_pic">
        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>John Doe</h2>
      </div>
    </div> --}}
    <!-- /menu profile quick info -->
{{-- >>>>>>> b36a1655da1af26842fbc3c86d0f293a555a3b89 --}}

    <br />

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
                  {{-- <li><a><i class="fa fa-clone"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{Route('user.list')}}">Danh Sách User</a></li>
                      <li><a href="{{Route('user.add')}}">Thêm User</a></li>
                    </ul>
                  </li> --}}
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
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('getlistcon')}}"><i class="fa fa-windows"></i> Khách Hàng Liên Hệ </a>
{{-- ======= --}}
                      <li><a href="#">Giới Thiệu Chung</a>
                        <ul class="nav child_menu">
                         <li><a href="#">Danh Sách Giới Thiệu</a></li> 
                         <li><a href="form.html">Thêm Giới Thiệu</a></li>
                         
                       </ul>
                     </li>
                     <li><a href="#">Chức Năng Nhiệm Vụ</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Chức Năng Nhiệm Vụ</a></li>
                        <li><a href="form_advanced.html">Danh Sách Chức Năng Nhiệm Vụ</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Cơ Cấu Tổ Chức</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Cơ Cấu Tổ Chức</a></li>
                        <li><a href="form_advanced.html">Danh Sách Cơ Cấu Tổ Chức</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Thư Viện <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form.html">Thêm Ảnh\Video</a></li>
                    <li><a href="form_advanced.html">Danh Sách Ảnh\Video</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Dịch Vụ <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="#">Cho Vay Lãi Suất Ưu Đãi</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Hỗ Trợ Lãi Suất Vay Vốn Sau Đầu Tư</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Tài Trợ Và Đồng Tài Trợ</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Cơ Chế Phát Triển Sạch (CMD)</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Trợ Giá Sản Phẩm Bảo Vệ Môi Trường</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Ký Quĩ Phục Hồi Và Bảo Vệ Môi Trường Trong Khai Thác Khoáng Sản</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Vốn ODA Và Cho Vay Ủy Thác</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Các Hoạt Động Khác</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Hoạt Động Nghiệp Vụ  <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="#">Quan Hệ Với Tổ Chức Quốc Tế</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Quan Hệ Với Tổ Chức Trong Nước</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Dự Án Và Hoạt Động Hợp Tác Quốc Tế</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Dự Án Và Hoạt Động Hợp Tác Trong Nước</a>
                      <ul class="nav child_menu">
                        <li><a href="form.html">Thêm Nội Dung</a></li>
                        <li><a href="form_advanced.html">Danh Sách Thông Tin</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Tin Tức <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="chartjs.html">Thêm Tin Tức</a></li>
                    <li><a href="chartjs2.html">Danh Sách Tin Tức</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-clone"></i> Văn Bản QPPL <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="fixed_sidebar.html">Thêm Văn Bản</a></li>
                    <li><a href="fixed_footer.html">Danh Sách Văn Bản</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Banner <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form.html">Thêm Banner</a></li>
                    <li><a href="form_advanced.html">Danh Sách Banner</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Footer <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form.html">Thêm Footer</a></li>
                    <li><a href="form_advanced.html">Danh Sách Footer</a></li>
                  </ul>
                </li>
                {{-- <li><a><i class="fa fa-edit"></i> User <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{Route('user.list')}}">Danh Sách User</a></li>
                    <li><a href="{{Route('user.add')}}">Thêm User</a></li> --}}
{{--=======--}}
                      {{--<li><a href="{{route('getadd')}}">Thêm Giới Thiệu</a>--}}
                      {{--</li>--}}
                      {{--<li><a href="{{route('getlist')}}">Danh Sách Giới Thiệu</a>--}}
                      {{--</li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li><a><i class="fa fa-edit"></i> Thư Viện <span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                      {{--<li><a href="form.html">Thêm Ảnh\Video</a></li>--}}
                      {{--<li><a href="form_advanced.html">Danh Sách Ảnh\Video</a></li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li><a><i class="fa fa-desktop"></i> Dịch Vụ <span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                      {{--<li><a href="{{route('getaddsv')}}">Thêm Dịch Vụ</a>--}}
                      {{--</li>--}}
                      {{--<li><a href="{{route('getlistsv')}}">Danh Sách Dịch Vụ</a>--}}
                      {{--</li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li><a><i class="fa fa-table"></i> Hoạt Động Nghiệp Vụ  <span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                      {{--<li><a href="{{route('getaddac')}}">Thêm Hoạt Động</a>--}}
                      {{--</li>--}}
                      {{--<li><a href="{{route('getlistac')}}">Danh Sách Hoạt Động</a>--}}
                      {{--</li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li><a><i class="fa fa-bar-chart-o"></i> Tin Tức <span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                      {{--<li><a href="{{route('getaddn')}}">Thêm Tin Tức</a></li>--}}
                      {{--<li><a href="{{route('getlistn')}}">Danh Sách Tin Tức</a></li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li><a><i class="fa fa-clone"></i> Văn Bản QPPL <span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                      {{--<li><a href="{{route('getadddoc')}}">Thêm Văn Bản</a></li>--}}
                      {{--<li><a href="{{route('getlistdoc')}}">Danh Sách Văn Bản</a></li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li><a ><i class="fa fa-edit"></i>Banner <span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                      {{--<li><a href="{{Route('banner.list')}}">Danh Sách Banner</a></li>--}}
                      {{--<li><a href="{{route('banner.add')}}">Thêm Banner</a></li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li><a><i class="fa fa-edit"></i> Footer <span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                      {{--<li><a href="{{Route('footer.list')}}">Danh Sách Footer</a></li>--}}
                      {{--<li><a href="{{route('footer.add')}}">Thêm Footer</a></li>--}}
                    {{--</ul>--}}

                  {{--</li>--}}
                   {{--<li><a><i class="fa fa-edit"></i>Contact<span class="fa fa-chevron-down"></span></a>--}}
                    {{--<ul class="nav child_menu">--}}
                      {{--<li><a href="{{Route('contact.list')}}">Danh Sách Contact</a></li>--}}
                      {{--<li><a href="{{route('contact.add')}}">Thêm Contact</a></li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}


                {{--</ul>--}}
              {{--</div>--}}
              {{--<div class="menu_section">--}}
                {{--<h3>Live On</h3>--}}
                {{--<ul class="nav side-menu">--}}
                  {{--<li><a><i class="fa fa-bug"></i> Khách Hàng Phản Hồi </a>--}}
{{-->>>>>>> --}}
{{-- >>>>>>> b36a1655da1af26842fbc3c86d0f293a555a3b89 --}}
                    
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


    <footer id="footer" style="height: 100%;">
      <div class="f-menu">
       <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentXL" aria-controls="navbarSupportedContentXL" aria-expanded="false" aria-label="Toggle navigation">
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
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </nav>
      </div>
     </div> <!-- hết menu -->
     <div class="f-cont">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
           <ul class="br-menu" style="float: right;">
             <li><a class="lang" key="thuvien" href="#">Thư Viện</a></li>
             <li><a class="lang" key="hoidap" href="#">Hỏi Đáp</a></li>
             <li><a class="lang" key="lienhe" href="#">Liên Hệ</a></li>
             <li><a class="lang" key="" href="#">RSS</a></li>
             <li><a class="lang" key="sodo" href="#">Sơ Đồ </a></li>
             <li><a class="lang" key="dangnhap" href="#">Đăng Nhập</a></li>
             <li><a class="lang" key="" href="#" class="active">English</a></li>
           </ul>
       </div>
        </div>
      </div>
     </div>
     <div class="f-copyright">
       <div class="container-fluid">
         <div class="row">
           <div class="col-md-2">
             <img src="images/f-logo.png" alt=""> <br>
              <h4>VEPF</h4>
           </div>
           <div class="col-md-10">
             <h4 class="lang" key="banquyen">BẢN QUYỀN © 2019 QUỸ BẢO VỆ MÔI TRƯỜNG </h4>
             <div class="container-fluid">
               <div class="row">
                 <div class="col-md-5">
                   <span class="lang" key="truso">Trụ sở chính: Tầng 6, Tòa nhà nhà Xuất bản Bản đồ,85 Nguyễn Chí Thanh, Đống Đa, Hà nội</span> <br>
                   <span class="lang" key="email">Email: abcdef@gmail.com</span> <br>
                   <span class="lang" key="sdt">Phone: (+84) 24.37951221 - Fax: (+84) 01.23456789</span>
                 </div>
                 <div class="col-md-1"></div>
                 <div class="col-md-6">
                   <span class="lang" key="vanphong" style="font-weight: bold;">Văn Phòng Đại Diện Miền Nam</span> <br>
                   <span class="lang" key="diachi" >Địa Chỉ: hòng A.M01, khu Liên cơ quan Bộ Tài nguyên và Môi trường, 200 Lý Chính Thắng, phường 9, quận 3, tp. Hồ Chí Minh.</span> <br>
                   <span>Email: abcdef@gmail.com</span> <br>
                   <span>Phone: (+84) 24.37951221</span>
                 </div>
               </div>
             </div>

           </div>
         </div>
       </div>
     </div>
    </footer>


 {{--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">   	
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"> 
    </script>
  </body>
</html>
 --}}
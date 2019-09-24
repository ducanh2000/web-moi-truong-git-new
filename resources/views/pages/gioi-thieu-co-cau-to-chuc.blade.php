@extends('master-layout')
@section('content')


<section class="about-wrap">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="a-link">
					Trang chủ / Giới thiệu / <span style="color: #007633;">Cơ cấu tổ chức</span>
				</div>
				<div class="about">
					<p>
						<div style="font-size: 20px; font-weight: bold; color: #000; margin-bottom: 13px;">
							Cơ cấu tổ chức
						</div>
					</p>
					<p>
						<div class="a-time">
							<i class="far fa-clock"></i> 16/01/2014 2:14:53 CH
						</div>
					</p>
					<div>
						<p>
							<span style="color: #00b050;font-weight: bold;">Sơ đồ tổ chức <br></span>
							<img src="images/CCTC.jpg" class="img-fluid" style="display: block; margin: 0 auto">
						</p>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Hội đồng quản lý Quỹ
						</p>
						<p style="text-indent: 30px;">Hội đồng quản lý Quỹ gồm có Chủ tịch và các ủy viên.</p>
						<p style="text-indent: 30px;">Chủ tịch Hội đồng quản lý Quỹ là một Thứ trưởng Bộ Tài nguyên và Môi trường.</p>
						<p style="text-indent: 30px;">Các ủy viên là lãnh đạo cấp vụ từ các cơ quan: Bộ Tài nguyên và Môi trường, Bộ Tài chính, Bộ Kế hoạch và Đầu tư và Ngân hàng Nhà nước Việt Nam.</p>
						<p style="text-indent: 30px;">Bộ trưởng Bộ Tài nguyên và Môi trường quyết định bổ nhiệm các thành viên Hội đồng quản lý Quỹ. Các thành viên Hội đồng quản lý Quỹ hoạt động theo chế độ kiêm nhiệm và được hưởng các chế độ theo quy định hiện hành của Nhà nước.</p>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Ban kiểm soát</p>
						<p style="text-indent: 30px;">Ban Kiểm soát gồm có Trưởng Ban Kiểm soát và một số thành viên.</p>
						<p style="text-indent: 30px;">Trưởng Ban Kiểm soát do Chủ tịch Hội đồng quản lý Quỹ bổ nhiệm và miễn nhiệm. Thành viên Ban Kiểm soát do Chủ tịch Hội đồng quản lý Quỹ quyết định theo đề nghị của Trưởng Ban Kiểm soát; số lượng thành viên Ban Kiểm soát không quá 5 người. Ban Kiểm soát hoạt động theo chế độ chuyên trách.</p>
						<p style="color: #00b050;font-weight: bold; padding-top: 15px;">Cơ quan điều hành nghiệp vụ</p>
						<p style="text-indent: 30px;">Cơ quan điều hành nghiệp vụ của Quỹ Bảo vệ môi trường Việt Nam gồm: Giám đốc, một số Phó Giám đốc, Kế toán trưởng và các phòng, ban nghiệp vụ, văn phòng đại diện.</p>
						<p style="text-indent: 30px;">Giám đốc Quỹ do Bộ trưởng Bộ Tài nguyên và Môi trường bổ nhiệm hoặc miễn nhiệm trên cơ sở đề nghị của Chủ tịch Hội đồng quản lý Quỹ;</p>
						<p style="text-indent: 30px;">Phó Giám đốc và Kế toán trưởng do Giám đốc đề nghị, Chủ tịch Hội đồng quản lý Quỹ xem xét, trình Bộ trưởng Bộ Tài nguyên và Môi trường bổ nhiệm hoặc miễn nhiệm;</p>
						<p style="text-indent: 30px;">Cơ cấu tổ chức, chức năng, nhiệm vụ của các phòng, ban nghiệp vụ giúp việc Cơ quan điều hành Quỹ Bảo vệ môi trường Việt Nam do Giám đốc Quỹ quyết định sau khi có ý kiến chấp thuận của Chủ tịch Hội đồng Quản lý Quỹ;</p>
						<p style="text-indent: 30px;">Cơ quan điều hành nghiệp vụ của Quỹ làm việc theo chế độ chuyên trách.</p>
					</div>
				</div>
				<div>
					@include('pages/gioi-thieu-tin-co-lien-quan')
				</div>
			</div>
			<div class="col-lg-3">
				@include('menu-right')
			</div>
		</div>
	</div>
</section>


@endsection
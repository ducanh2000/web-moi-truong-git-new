		// var slideIndex = 0;
		// // carousel();
		// function plusDivs(n) {
		//   	showDivs(slideIndex += n);
		// }

		// function showDivs(n) {
		// 	  var i;
		// 	  var x = document.getElementsByClassName("mySlides");
		// 	  if (n > x.length) {slideIndex = 1} 
		// 	  if (n < 1) {slideIndex = x.length} ;
		// 	  for (i = 0; i < x.length; i++) {
		// 	    x[i].style.display = "none"; 
		// 	  }
		// 	  x[slideIndex-1].style.display = "block"; 
		// 	}
			
		// function carousel() {
		//   var i;
		//   var x = document.querySelectorAll(".mySlides");
		//   for (i = 0; i < x.length; i++) {
		//     mySlides[i].style.display = "none"; 
		//   }
		//   slideIndex++;
		//   if (slideIndex > x.length) {slideIndex = 1} 
		//   mySlides[slideIndex-1].style.display = "block"; 
		//   setTimeout(carousel, 2000); // Change image every 2 seconds
		// }

		$('.slide').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		})

		$('.slide2').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:3
				}
			}
		})
// language
var arrLang = {
	'en' : {
		// header
		'quy-bao-ve-mt' : 'Viet nam environment protection fund',
		'quy-bao-ve-en' : 'Quỹ bảo vệ môi trường việt nam',
		'gioithieu' : 'About Us',
		'tintuc' : 'FORM OF SERVICE',
		'hoptac-phattrien' : 'Cooperation and Development',
		'hoatdong-nghiepvu' : 'NEWS',
		'vb' : 'Legal documents',
		'hoptac-quocte' : 'ANNUAL REPORT',
		'date' : 'Tuesday, 07/04/2019 15:39 GMT +7',
		'thuvien': 'Multimedia',
		'hoidap' : 'FQA',
		'sodo' : 'SiteMap',
		'dangnhap' : 'Login',
		'lienhe' : 'Contact',
		'thudientu' : 'Email',
		'tim' : 'Search',
		// footer
		'banquyen' : 'Copyright © 2019 Vietnam Environment Protection Fund ',
		'truso' : 'Head office: 6th Floor, Map Publishing House,85 Nguyen Chi Thanh, Dong Da, Hanoi',
		'vanphong' : 'Representative office in the South',
		'diachi' : 'Address: Room A.M01, Contact area of Ministry of Natural Resources and Enviroment, 200 Ly Chinh Thang, Ward 9, District 3, Ho Chi Minh City.',
		// right
		'dangky-vayvon' : 'CUSTOMER INFORMATION',
		'ten-cty' : 'Customer Information',
		'ten-duan' : 'Company name',
		'dia-chi' : 'Address',
		'sodienthoai' : 'Phone number',
		'duan':'Content Project',
		'sent' : 'Send information',
		'lai-suat' : 'Interest rate for environmental protection projects in 2014 is 3.6% per year Supproting interest rate post - investment for environmental protection projects in 2014 is 2.4% per year',
		'hoatdong-nghiepvu' : 'CUSTOMER INFORMATION',
		'cho-vay' : 'Soft Loan',
		'taitro' : 'Interest rate support',
		'y-quy' : 'Funding and co-funding',
		'kinhte-xanh' : 'Clean Development Mechanism',
		'GEF' : 'Clean Development Mechanism',
		'khac' : 'Clean Development Mechanism',
		'hop' : 'MEETING ONLINE',
		'lk-trang' : 'LINK EXCHANGE',
		'bo-nganh' : 'Ministry, Industry, Local',
		'cac-don-vi' : 'Career units',
		'thongke' : 'STATISTICAL ACCESS',
		'onl' : 'Online',
		'luot' : 'Access times ',
		// left
		'eng' : 'Supproting interest rate post - investment for environmental protection projects in 2014 is 2.4% per year',
		'hd-quy' : 'NEWS OF VEPF',
		'more' : 'SEE MORE >>',
		'gui-cauhoi' : 'SEND_QUESTION',
		'toimuon' : 'I want to implement a project to filter industrial emissions before being discharged into the environment and need funding support. Please ask for any funding to support project development?',
		'ha-vd' : 'Photos | Video',
	},
	'vie' : {
		// header
		'quy-bao-ve-mt' : 'Quỹ bảo vệ môi trường việt nam',
		'quy-bao-ve-en' : 'Viet nam environment protection fund',
		'gioithieu' : 'Giới Thiệu',
		'tintuc' : 'Tin Tức',
		'hoptac-phattrien' : 'Hoạt động nghiệp vụ',
		'hoatdong-nghiepvu' : 'Hợp tác quốc tế',
		'vb' : 'Văn Bản QPPL',
		'hoptac-quocte' : 'Hợp tác quốc tế',
		'date' : 'Tuesday, 07/04/2019 15:39 GMT +7',
		'thuvien': 'Thư Viện',
		'hoidap' : 'Hỏi Đáp',
		'sodo' : 'Sơ Đồ',
		'dangnhap' : 'Đăng Nhập',
		'lienhe' : 'Liên Hệ',
		'thudientu' : 'Thư điện tử',
		'tim' : 'Nhập từ khóa',
		// footer
		'banquyen' : 'BẢN QUYỀN © 2019 QUỸ BẢO VỆ MÔI TRƯỜNG',
		'truso' : 'Trụ sở chính: Tầng 6, Tòa nhà nhà Xuất bản Bản đồ,85 ',
		'vanphong' : 'Văn Phòng Đại Diện Miền Nam ',
		'diachi' : 'Địa Chỉ: hòng A.M01, khu Liên cơ quan Bộ Tài nguyên và Môi trường, 200 Lý Chính Thắng, phường 9, quận 3, tp. Hồ Chí Minh. ',
		// right
		'dangky-vayvon' : 'ĐĂNG KÝ VAY VỐN',
		'ten-cty' : 'Tên doanh nghiệp',
		'ten-duan' : 'Tên dự án',
		'dia-chi' : 'Địa chỉ',
		'sodienthoai' : 'Số điện thoại',
		'duan':'Tóm tắt dự án',
		'sent' : 'Gửi thông tin',
		'lai-suat' : 'Mức lãi suất cho vay ưu đãi các dự án đầu tư bảo vệ môi trường năm 2019 là 2.6%/năm hoặc 3.6%/năm Mức hỗ trợ lãi suất sau đầu tư cho các dự án bảo vệ môi trường năm 2019 là 2,4%/năm',
		'hoatdong-nghiepvu' : 'HOẠT ĐỘNG NGHIỆP VỤ',
		'cho-vay' : 'Cho vay lãi suất ưu đãi',
		'taitro' : 'Tài trợ và đồng tài trợ',
		'y-quy' : 'ý quỹ cải tạo phục hồi môi trường trong khai thác khoáng sản',
		'kinhte-xanh' : 'Kinh tế xanh',
		'GEF' : 'Văn phòng GEF Việt Nam',
		'khac' : 'Các hoạt động khác',
		'hop' : 'Họp trực tuyến',
		'lk-trang' : 'Liên kết trang',
		'bo-nganh' : 'Bộ, Ngành, Địa Phương',
		'cac-don-vi' : 'Các đơn vị sự kiện',
		'thongke' : 'Thống kê truy cập',
		'onl' : 'Đang Online',
		'luot' : 'Lượt truy cập ',
		// left
		'eng' :'Chuẩn bị tổ chức hưởng ứng Tuần lễ Biển và Hải đảo Việt Nam, Tháng hành động vì môi trường năm 2019',
		'hd-quy' : 'TIN HOẠT ĐỘNG CỦA QUỸ',
		'more' : 'XEM THÊM >>',
		'gui-cauhoi' : 'Gửi Câu Hỏi',
		'toimuon' : 'Tôi muốn thực hiện dự án lọc khí thải công nghiệp trước khi thải ra môi trường đang cần nguồn kinh phí hỗ trợ. xin hỏi có nguồn kinh phí nào hộ trợ phát triển dự án không?',
		'ha-vd' : 'Ảnh | Video',
	}
};
$(function(){
	$('.translate').click(function(){
		console.log("OK");
		var lang = $(this).attr('id');	
			$('.lang').each(function(index,element){
				$(this).text(arrLang[lang][$(this).attr('key')]);
			});
	});
});
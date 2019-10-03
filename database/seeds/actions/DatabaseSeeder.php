<?php
Use \Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\models\users;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('role')->delete();
        DB::table('role')->insert([
            ['id'=>1,'name'=>'Admin'],
            ['id'=>2,'name'=>'Editor'],
            ['id'=>3,'name'=>'User'],          
        ]);
         DB::table('admin')->delete();
        DB::table('admin')->insert([
            ['id'=>1,'name'=>'admin','email'=>'admin@gmail.com','password'=>bcrypt('123456'),'phone'=>'0342085666','level'=>1,'status'=>1],
            ['id'=>2,'name'=>'editor','email'=>'editor@gmail.com','password'=>bcrypt('123456'),'phone'=>'0967123999','level'=>2,'status'=>1],
            ['id'=>3,'name'=>'user','email'=>'user@gmail.com','password'=>bcrypt('123456'),'phone'=>'0981188256','level'=>3,'status'=>1],
        ]);
        DB::table('library')->insert([
            ['id'=>1,'title'=>'xã hội','kind'=>'image','link'=>'anh-3.jpg'],
            ['id'=>2,'title'=>'thế giới','kind'=>'image','link'=>'index_16.jpg'],
        ]);
        DB::table('users')->insert([
            ['id'=>1,'name'=>'admin','email'=>'admin@gmail.com','password'=>bcrypt('123456')],
            ['id'=>2,'name'=>'editor','email'=>'editor@gmail.com','password'=>bcrypt('123456')],
            ['id'=>3,'name'=>'user','email'=>'user@gmail.com','password'=>bcrypt('123456')],

        ]);
       DB::table('action')->insert([
          'title' => 'Quan hệ với tổ chức quốc tế',
          'content' => 'Quỹ Bảo vệ môi trường Việt Nam chủ trương hợp tác với tất cả các tổ chức quốc tế hoạt động trong lĩnh vực bảo vệ môi trường, ứng phó biến đổi khí hậu nhằm huy động tối đa các nguồn lực quốc tế hỗ trợ cho hoạt động bảo vệ môi trường, ứng phó với biến đổi khí hậu tại Việt Nam, phối hợp thực hiện các cam kết quốc tế của Việt Nam về bảo vệ môi trường và ứng phó với biến đổi khí hậu.

          Hiện nay, Quỹ Bảo vệ môi trường Việt Nam đã đặt quan hệ hợp tác với nhiều tổ chức quốc tế, tổ chức ngoài nước như: Tổ chức Y tế Thế giới (WHO), Tổ chức Phát triển Công nghiệp Liên Hợp quốc (UNIDO), Ngân hàng Thế giới (WB), Ngân hàng Phát triển Châu Á (ADB), Ủy ban Môi trường và Xã hội Châu Á Thái Bình Dương (ESCAP) của Liên Hợp Quốc; Các tổ chức nước ngoài: Cơ quan Phát triển Quốc tế Đan Mạch (DANIDA), Cơ quan Hợp tác Quốc tế Nhật Bản (JICA), Trung tâm Hợp tác Môi trường Hải ngoại (OECC) của Nhật Bản, Cơ quan Hợp tác Quốc tế Hàn Quốc (KOICA), Cơ quan Phát triển Cộng hòa Séc, Quỹ Môi trường Cộng hòa Séc(SEF),
          Cơ quan Hợp tác phát triển Đức (GIZ) … Các Đại sứ quán tại Việt Nam: ĐSQquán Cộng hòa Séc, ĐSQ Vương Quốc Bỉ, ĐSQ Úc, ĐSQ Pháp, ĐSQ CHLB Đức,….; Các cơquan đại diện và tổ chức phi chính phủ của một số nước trên thế giới: Quỹ Rosa Luxemburg, Viện nghiên cứu độc lập các vấn đề môi trường Đức (UfU), Viện Công nghệ và Công nghiệp Môi trường Hàn Quốc (KEITI), Cơ quan Môi trường Hàn Quốc(KECO), Tổ chức Phát triển thế giới (DWW) - Cộng hòa Séc,…

          Ngoài ra, Quỹ Bảo vệ môi trường Việt Nam còn có quan hệ hợp tác với nhiều công ty đa quốc gia, quốc tế hoạt động trong lĩnh vực công nghệ sạch, thân thiện môi trường, xử lý ô nhiễm nhằm giúp các doanh nghiệp Việt Nam tiếp cận công nghệ mới, hiện đại và xúc tiến đầu tư vào Việt Nam trong lĩnh vực bảo vệ môi trường.',
          'slug'=>'quan-he-voi-to-chuc-quoc-te',
          'status'=>'1',
          'created_at'=>  Carbon::now(),
          'updated_at'=>  Carbon::now()

      ] );
       DB::table('action')->insert([
        'title' => 'Quan hệ với tổ chức trong nước',
        'content' => 'Hợp tác chặt chẽ với các cơ quan quản lý nhà nước về bảo vệ môi trường từ trung ương đến địa phương, các quỹ bảo vệ môi trường địa phương và ngành nhằm phục vụ công tác hỗ trợ tài chính các dự án và hoạt động bảo vệ môi trường của Quỹ, nâng cao năng lực và phối hợp công tác, tổ chức các sự kiện quốc gia về môi trường.
        Hợp tác với các tổ chức,doanh nghiệp thực hiện các dự án hợp tác nhằm tuyên truyền nâng cao nhận thức cộng đồng về bảo vệ môi trường và triển khai các hoạt động của Quỹ tại địa phương.',
        'slug'=>'quan-he-voi-to-chuc-trong-nuoc',
        'status'=>'1',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()

    ] );
       DB::table('action')->insert([
        'title' => 'Dự án và hoạt động hợp tác quốc tế',
        'content' => '2006 - 2011: Tham gia thực hiện hợp phần dự án “Kiểm soát ô nhiễm trong khu vực đông dân nghèo” (PCDA) do Cơ quan Phát triển Quốc tế Đan Mạch (DANIDA) tài trợ. Quỹ đã triển khai công tác năng cao năng lực, thông tin và hỗ trợ các địa phương tại Việt Nam về công tác tiếp cận vốn ưu đãi của Quỹ đồng thời tham gia các hoạt động nâng cao nhận thức về bảo vệ môi trường cho các khu vực đông dân nghèo tại các tỉnh Thái Nguyên, Hà Nam, Quảng Nam và Bến Tre.
        2008 - 2010: Thực hiện dự án “Lắp đặt lò sấy gốm sứ tiết kiệm năng lượng - bảo vệ môi trường cho làng nghề gốm sứ Bát Tràng” hợp tác với Tổ chức Phát triển thế giới (DWW) và Đại sứ quán Cộng hòa Séc tài trợ cho một số hộ sản xuất gốm sứ chuyển đổi công nghệ đốt lò than sang đốt lò gas, giảm thiểu ô nhiễm môi trường làng nghề thủ công Bát Tràng - Hà Nội.
        2009: Thực hiện dự án “nâng cao năng lực và trao đổi kinh nghiệm cho cán bộ của Quỹ trong công tác hỗ trợ vay vốn cho các dự án bảo vệ môi trường” hợp tác với Quỹ Môi trường quốc gia Cộng hòa Séc (SEF).
        2007 - 2012: Tổ chức các hội nghị, hội thảo thường niên nhằm học tập, trao đổi kinh nghiệm chuyên môn và giới thiệu công nghệ tiên tiến về bảo vệ môi trường tại các địa phương ở hai quốc gia Việt Nam và Cộng hòa Séc Quỹ hợp tác với Đại sứ quán Cộng hòa Séc, Bộ Môi trường Cộng hòa Séc, Quỹ Môi trường quốc gia Cộng hòa Séc (SEF), Tổ chức Phát triển Thế giới (DWW) và các cơ quan liên quan của Cộng Hòa Séc.
        2013 - 2018: Thực hiện Hợp phần 2 của Dự án “Quản lý ô nhiễm các khu công nghiệp thuộc lưu vực sông Đồng Nai, sông Nhuệ - Đáy” sử dụng nguồn vốn vay của Ngân hàng Thế giới(WB) để thực hiện hỗ trợ vốn với lãi suất ưu đãi cho công tác xử lý nước thải tại các khu công nghiệp tập trung tại bốn tỉnh Hà Nam, Nam Định, Đồng Nai và Bà Rịa- Vũng Tàu.',
        'slug'=>'du-an-va-hoat-dong-hop-tac-quoc-te',
        'status'=>'1',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()

    ] );
       DB::table('action')->insert([
        'title' => 'Dự án và hoạt động hợp tác trong nước',
        'content' => '2008: Ký Thỏa thuận hợp tác với hãng hàng không JetStar Pacific Airlines xây dựng chương trình
        giảm thiểu hiệu ứng nhà kính từ nguồn kinh phí đóng góp của cộng đồng hành khách đi máy bay;2010: Tham gia tổ
        chức Lễ mít tinh quốc gia hưởng ứng Ngày đất ngập nước (2-2) năm 2010 tại Hà Nội; Tham gia tổ chức Lễ kỷ niệm
        quốc gia hưởng ứng Ngày Môi trường thế giới (5/6) năm2010 tại Quảng Bình; Tổ chức triển lãm ASEAN về đa dạng 
        sinh học tại Hà Nội; Tham gia tổ chức Hội nghị Môi trường toàn quốc lần thứ ba năm 2010 tại Hà Nội;2011: Tham 
        gia tổ chức Lễ kỷ niệm quốc gia hưởng ứng Ngày Môi trường thế giới (5/6) năm 2011 tại Bắc Kạn; Tham gia tổ chức
        Tuần lễ Biển và Hải đảo năm 2011 tại Nha Trang; Tham gia tổ chức Lễ phát động quốc gia hưởng ứng Chiến dịch Làm
        cho thế giới sạch hơn năm 2011 tại thành phố Hồ Chí Minh;2012: Tham gia tổ chức Lễ kỷ niệm quốc gia hưởng ứng
        Ngày Môi trường thế giới (5/6) năm 2012 tại Quảng Ninh; Tham gia tổ chức Tuần lễ Biển và Hải đảo năm 2012 tại
        Bà Rịa - Vũng Tàu; Tham gia tổ chức Lễ phát động quốc gia hưởng ứng Chiến dịch Làm cho thế giới sạch hơn năm 
        2012 tại Đà Nẵng;Hỗ trợ tổ chức Lễ phát động Tháng Thanh niên và xây dựng mô hình trồng 10 héc ta rừng tại xã
        Bản Qua, huyện Bát Xát, tỉnh Lào Cai năm 2012 từ nguồn kinh phí Quỹ Carbon đã thu được theo Chương trình 
        giảm thiểu hiệu ứng nhà kính hợp tác giữa Công ty cổ phần hàng không JetStar Pacific Airlines (JP) và Quỹ
        Bảo vệ môi trường Việt Nam (VEPF);2013: Tham gia tổ chức Lễ kỷ niệm quốc gia hưởng ứng Ngày Môi trường
        thế giới (5/6) năm 2013 tại Thừa Thiên Huế; Tham gia tổ chức Tuần lễ Biển và Hải đảo năm 2013 tại Hà Tĩnh;
        Tham gia tổ chức Lễ phát động quốc gia hưởng ứng Chiến dịch Làm cho thế giới sạch hơn năm 2013 tại Đà lạt;
        Ký Thỏa thuận hợp tác với Công ty TNHH MTV Võ Việt Chung xây dựng và triển khai dự án “Blue Ocean World” nhằm
        thành lập Quỹ “Blue Ocean Fund” nhằm tuyên truyền nâng cao nhận thức cộng đồng về bảo vệ tài nguyên và môi 
        trường biển, hỗ trợ tài chính cho các hoạt động bảo vệ môi trường biển do dự án đề xuất.',
        'slug'=>'du-an-va-hoat-dong-trong-nuoc',
        'status'=>'1',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()

    ] );
       DB::table('document')->insert([
        'number' => '03/QĐ-HĐQ',
        'address' => 'Hội đồng quản lý',
        'content' => 'Về mức hỗ trợ lãi suất sau đầu tư năm 2019',
        'slug' => 'van-ban-qppl',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('introduce')->insert([
        'name' => 'Giới thiệu chung',
        
        'content' => 'Trang tin của Quỹ Bảo vệ môi trường Việt Nam đang ở trước mắt bạn!Qua kênh thông tin này
        , chúng tôi mong chuyển tới bạn đọc sớm nhất, nhanh nhất, đầy đủ và chính xác nhất một số thông tin
        liên quan trong lĩnh vực bảo vệ môi trường và những việc được tập thể cán bộ,
        công nhân viên của Quỹ đã, đang và sẽ thực hiện để góp phần thiết thực vì một Việt - Nam - Xanh với phương châm 3 tốt:
        Huy động tốt cho mọi nguồn tài chính cho bảo vệ môi trườngSử dụng tốt nguồn vốn do Quỹ quản lýPhát triển tốt để xây dựng
        Quỹ thành một tổ chức tài chính nhà nước vững mạnhTất cả cho bảo vệ môi trường, tôn trọng pháp luật để đất nước phát triển
        bền vững. Mỗi người hãy xứng đáng là người công dân-vì-sự nghiệp-phát triển-bền vững.',
        'slug' => 'gioi-thieu-chung',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('introduce')->insert([
        'name' => 'Chức năng nhiệm vụ',
        
        'content' => 'Chức năngQuỹ Bảo vệ môi trường Việt Nam có chức năng tiếp nhận các nguồn vốn từ 
        ngân sách nhà nước; các nguồn tài trợ, đóng góp, ủy thác của các tổ chức, cá nhân trong và
        ngoài nước nhằm hỗ trợ tài chính cho các hoạt động bảo vệ môi trường trên phạm vi toàn quốc.',
        'slug' => 'chuc-nang-nhiem-vu',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('introduce')->insert([
        'name' => 'Cơ cấu tổ chức',
        
        'content' => 'Ban kiểm soátBan Kiểm soát 
        gồm có Trưởng Ban Kiểm soát và một số thành viên.
        Trưởng Ban Kiểm soát do Chủ tịch Hội đồng quản lý Quỹ bổ nhiệm và
        miễn nhiệm. Thành viên Ban Kiểm soát do Chủ tịch Hội đồng quản lý Quỹ quyết định 
        theo đề nghị của Trưởng Ban Kiểm soát; số lượng thành viên Ban Kiểm soát không quá 5 người.
        Ban Kiểm soát hoạt động theo chế độ chuyên trách.',
        'slug' => 'co-cau-to-chuc',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('news')->insert([
        'images' => 'index1_08.png',
        'title' => 'TIN MÔI TRƯỜNG',
        'kindnew' => 'hoatdongqui',
        'summary' => 'Chuẩn bị tổ chức hưởng ứng Tuần lễ Biển và Hải đảo Việt Nam, Tháng hành động vì môi trường năm 2019',
        'content' => 'Bộ trưởng Trần Hồng Hà tham quan mô hình xử lý nước thải tại KCN Sóng Thần II (13/02/2018)(13/02/2018))',
        'slug' => 'tin-moi-truong',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('news')->insert([
        'images' => 'index1_05.png',
        'title' => 'Tin hoạt động của quỹ',
        'kindnew' => 'moitruong',
        'summary' => 'Hội nghị hỗ trợ tài chính năm 2019 cho các hoạt động bảo vệ môi trường, ứng phó biến đổi khí hậu',
        'content' => 'Tập đoàn Biwater (Anh Quốc) mong muốn hỗ trợ Việt Nam xử lý nước thải (13/02/2018)(13/02/2018)',
        'slug' => 'tin-hoat-dong-cua-qui',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('news')->insert([
        'images' => 'index_03.jpg',
        'title' => 'HỢP TÁC PHÁT TRIỂN',
        'kindnew' => 'hoptacpt',
        'summary' => 'Ký Thỏa thuận hợp tác với Công ty TNHH MTV Võ Việt Chung xây dựng và triển khai dự án “Blue Ocean World”',
        'content' => 'Tham gia tổ chức Lễ phát động quốc gia hưởng ứng Chiến dịch Làm cho thế giới sạch hơn năm 2019 tại Đà lạt (13/02/2018)',
        'slug' => 'hop-tac-phat-trien',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('news')->insert([
        'images' => 'index_06.jpg',
        'title' => 'KHOA HỌC CÔNG NGHỆ',
        'kindnew' => 'congnghe',
        'summary' => 'Việt Nam - EU Tăng cường hợp tác bảo vệ khí hậu',
        'content' => 'Công nghệ bê tông rỗng thoát nước nhanh thích ứng với biến đổi khí hậu (13/02/2018)(13/02/2018)',
        'slug' => 'khoa-hoc-cong-nghe',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('services')->insert([
        'title' => 'Cho vay lãi suất ưu đãi',
        'content' => 'Đối tượng cho vayĐối tượng được cho vay ưu đãi từ Quỹ Bảo vệ môi trường Việt Nam là tổ chức,
        cá nhân có các dự án đầu tư thực hiện các hoạt động bảo vệ môi trường; dự án đầu tư thực hiện việc phòng,
        chống, khắc phục ô nhiễm, suy thoái và sự cố môi trường mang tính quốc gia, liên ngành, liên vùng hoặc giải
        quyết các vấn đề môi trường cục bộ nhưng có phạm vi ảnh hưởng lớn.',
        
        'slug' => 'cho-vay-lai-xuat',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('services')->insert([
        'title' => 'Hỗ trợ lãi suất vay vốn sau đầu tư',
        'content' => 'Đối tượng hỗ trợ lãi suất vay Các tổ chức, cá nhân có đi vay vốn của các tổ chức tín dụng ngoài
        Quỹ được phép hoạt động tại Việt Nam để thực hiện các chương trình, dự án, hoạt động và nhiệm vụ bảo vệ môi
        trường mang tính quốc gia, liên ngành, liên vùng hoặc giải quyết các vấn đề môi trường cục bộ nhưng phạm vi
        ảnh hưởng lớn thuộc các lĩnh vực phòng, chống, khắc phục ô nhiễm, suy thoái và sự cố môi trường.',
        
        'slug' => 'ho-tro-lai-xuat-vay-von-dau-tu',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('services')->insert([
        'title' => 'Tài trợ và đồng tài trợ',
        'content' => 'Điều kiện để được xem xét tài trợĐể được xem xét tài trợ, Chủ đầu tư phải đáp ứng đủ các điều kiện sau:
        Dự án của Chủ đầu tư được cơ quan quản lý nhà nước về môi trường xác nhận thuộc đối tượng được xét chọn;
        Chủ đầu tư có vốn đối ứng ít nhất là 50% tổng chi phí đầu tư để thực hiện dự án đó.
        Hồ sơ xin tài trợ hoặc đồng tài trợ được Quỹ chấp thuận và tiến hành ký hợp đồng tài trợ hoặc đồng tài trợ.',
        
        'slug' => 'tai-tro-va-dong-tai-tro',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('services')->insert([
        'title' => 'Cơ chế phát triển sạch (CDM)',
        'content' => 'Các nội dung hoạt động trong lĩnh vực CDMĐăng ký, theo dõi và quản lý các chứng chỉ giảm phát thải
        khí nhà kính được chứng nhận (CERs)Thu lệ phí bán/chuyển CERsHỗ trợ tài chính xây dựng văn kiện thiết kế dự án
        (PDD)Trợ giá cho các sản phẩm dự án đầu tư theo cơ chế phát triển sạch (CDM)Hỗ trợ tài chính cho các hoạt động
        phổ biến, tuyên truyền nâng cao nhận thức về biến đổi khí hậu và CDMHỗ trợ các hoạt động của Ban chỉ đạo thực 
        hiện Công ước khung của Liên hợp quốc về biến đổi khí hậu và Nghị định thư KyotoHỗ trợ các hoạt động khác liên
        quan đến CDM theo quy định của pháp luậtHỗ trợ 10% vốn đầu tư thiết bị của dự án triển khai ứng dụng sáng chế 
        bảo vệ môi trường',
        
        'slug' => 'co-che-phat-sach(CDM)',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('services')->insert([
        'title' => 'Trợ giá sản phẩm bảo vệ môi trường',
        'content' => 'Đối tượng trợ giá và hỗ trợ giáSản phẩm của dự án CDM thuộc lĩnh vực ưu tiên được Chính phủ quy định
        trợ giáCác dự án điện gió nối lưới',
        
        'slug' => 'tro-gia-san-pham-bao-ve-moi-truong',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('services')->insert([
        'title' => 'Ký quỹ phục hồi môi trường trong khai thác khoáng sản',
        'content' => 'Đối tượng ký quỹ cải tạo phục hồi môi trường trong khai thác khoáng sản Mọi tổ chức, 
        cá nhân được phép khai thác khoáng sản theo quy định tại Điều 6 Quyết định số 71/2008/QĐ-TTg ngày 29/5/2008
        của Thủ tướng Chính phủ về việc ký quỹ cải tạo phục hồi môi trường đối với hoạt động khai thác khoáng sản',
        
        'slug' => 'ky-quy-phuc-hoi-moi-truong-trong-khai-thac-khoang-san',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('services')->insert([
        'title' => 'Vốn ODA và cho vay ủy thác',
        'content' => 'Vốn ODA và cho vay ủy thácQuỹ Bảo vệ môi trường Việt Nam tiếp nhận nguồn vốn ODA được Chính phủ
        cho vay lại, sử dụng nguồn vốn ODA để cho vay đầu tư và thu hồi nợ của chủ đầu tư dự án bảo vệ môi trường thông
        qua các hợp đồng tín dụng Nhận ủy thác quản lý các nguồn vốn cho vay, tài trợ để cấp phát cho vay và thu hồi
        nợ của chủ đầu tư dự án bảo vệ môi trường từ các tổ chức trong và ngoài nước thông qua hợp đồng nhận ủy thác
        giữa Quỹ Bảo vệ môi trường Việt Nam và các tổ chức ủy thác.',
        
        'slug' => 'von-oda-va-cho-vay-uy-thac',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
       DB::table('services')->insert([
        'title' => 'Các hoạt động khác',
        'content' => 'Các hoạt động khácSử dụng vốn nhàn rỗi không có nguồn gốc từ ngân sách nhà nước và có sự thỏa thuận
        của tổ chức, cá nhân cung cấp vốn để mua trái phiếu chính phủ;Tham gia điều phối, quản lý tài chính các chương
        trình, dự án bảo vệ môi trường trọng điểm theo sự phân công của Bộ trưởng Bộ Tài nguyên và Môi trường và quyết
        định của cấp có thẩm quyền;Thực hiện các nhiệm vụ khác theo sự phân công của Bộ trưởng Bộ Tài nguyên và Môi 
        trường.',
        
        'slug' => 'cac-hoat-dong-khac',
        'created_at'=>  Carbon::now(),
        'updated_at'=>  Carbon::now()
    ]);
   }
}

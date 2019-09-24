<?php
header("Content-type: text/xml");
function xml_entities($string) {
    return str_replace(
            array("&", "<", ">", '"', "'"), array("&amp;", "&lt;", "&gt;", "&quot;", "&apos;"), $string
    );
}
  
// Kết nối CSDL và lấy danh sách 10 tin mới nhất
$conn = mysqli_connect("localhost", "root", "", "vefb") or die("Khong the ket noi CSDL");
mysqli_set_charset($conn,"utf8");
$query = "SELECT * FROM action order by id desc";
$result = mysqli_query($conn, $query);
 
// Lặp dư liệu và đưa ra các items XML
$items = '';
while ($row = mysqli_fetch_array($result)) {
    $items .= '<item>';
        $items .= "<title>" . xml_entities($row['title']) . "</title>";
        $items .= "<link>" . xml_entities("https://www.facebook.com/") . "</link>";
        $items .= "<description>" . xml_entities($row['content']) . "</description>";
        $items .= "<guid>" . xml_entities("https://www.facebook.com/") . "</guid>";
        // Nếu bạn muốn thêm ngày tạo tin thì trong CSDL thêm một field add_date và
        // thêm dòng này:
        // $items .= "<pubDate>{$result['description']}</pubDate>";
    $items .= '</item>';
}
 
// Xuất thông tin website và nối $items vào
echo '<?xml version="1.0"?>
<rss version="2.0">
    <channel>
        <title> ' . xml_entities('Học lập trình online freetuts.net') . ' </title>
        <link>' . xml_entities('https://www.facebook.com/') . '</link>
        <description> ' . xml_entities('Freetust.net là một website học lập trình online miễn phí') . ' </description>
        <language>vi_VN</language>
        '.$items.'
    </channel>
</rss>';
?>
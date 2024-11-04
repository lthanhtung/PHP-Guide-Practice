<?php
$ThongtinNV = array(
    "sinh viên" => array("thongtinnv01" => array("MA nhan vien"=> "1", "Họ tên nv" => "Lê thanh tùng", "Ngày sinh" => '20-02-2003', 'điện thoại' => '0861725'),
        'thongtinnv02'=> array("MA nhan vien"=> "2", "Họ tên nv" => "Lê thanh tùng", "Ngày sinh" => '20-02-2003', 'điện thoại' => '0861725')
    
    )
);


$ThongtinNV['sinh viên'][]=array("MA nhan vien"=> "3", "Họ tên nv" => "Lê thanh tùng", "Ngày sinh" => '20-02-2003', 'điện thoại' => '0861725');
$ThongtinNV['sinh viên'][]=array("MA nhan vien"=> "4", "Họ tên nv" => "Lê thanh tùng", "Ngày sinh" => '20-02-2003', 'điện thoại' => '0861725');
$ThongtinNV['sinh viên'][]=array("MA nhan vien"=> "5", "Họ tên nv" => "Lê thanh tùng", "Ngày sinh" => '20-02-2003', 'điện thoại' => '0861725');
foreach ($ThongtinNV as $key => $value) {
    echo "<h2> $key </h2>";
    //in ra cac phan tu ung voi khoa
    foreach ($value as $nv => $Thongtin) {
        foreach ($Thongtin as $k => $thongtin) {
            echo "$k :$thongtin<br>";
        }
    }
}
?>
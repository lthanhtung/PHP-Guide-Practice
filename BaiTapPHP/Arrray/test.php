<?php
// Khởi tạo mảng ban đầu
$ThongtinNV = array(
    "sinh viên" => array(
        "Mã NV" => "1", "Họ tên nv" => "Lê thanh tùng", "Ngày sinh" => '20-02-2003', 'Điện thoại' => '0861725'
    ),
    'Giáo viên' => array(
       "Mã NV" => "2", "Họ tên nv" => "Lê Thị Bích Hằng", 'Ngày sinh' => '20-02-2003', 'Điện thoại' => '0861725'
    )
);

// Thêm nhân viên mới vào "sinh viên"
$newSinhVien = array("Mã NV" => "3", "Họ tên nv" => "Trần Văn C", "Ngày sinh" => '15-05-2002', 'Điện thoại' => '0912345678');

// Kiểm tra và thêm nhân viên vào nhóm "sinh viên"
$ThongtinNV["Giáo viên"][] = $newSinhVien;

// In kết quả
echo "<pre>";
print_r($ThongtinNV);
echo "</pre>";
?>

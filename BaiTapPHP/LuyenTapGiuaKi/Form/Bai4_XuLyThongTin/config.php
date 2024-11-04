<p><b>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</b></p>
<?php
if (isset($_POST['Gui'])) {

    echo "Họ tên: ".$_POST['hoTen']."<br>";
    echo "Địa chỉ: ".$_POST['diaChi']."<br>";
    echo "Số điện thoại: ".$_POST['Sdt']."<br>";
    if (isset($_POST['gioiTinh']) && $_POST['gioiTinh'] =='nam' ) {
        echo "Giới tính: Nam<br>";
    }
    if (isset($_POST['gioiTinh']) && $_POST['gioiTinh'] =='nu' ) {
        echo "Giới tính: Nữ <br>";
    }
    if (isset($_POST['quocTich']) && $_POST['quocTich']=='vn') {
        echo "Quốc tịch: Việt Nam<br>";
    }
    if (isset($_POST['quocTich']) && $_POST['quocTich']=='jp') {
        echo "Quốc tịch: Nhật Bản<br>";
    }
    $str = array();
    if (isset($_POST['mh01'])) {
        $str[] ='PHP & SQL';
    }
    if (isset($_POST['mh02'])) {
        $str[] ='C#';
    }
    if (isset($_POST['mh03'])) {
        $str[] ='XML';
    }
    if (isset($_POST['mh04'])) {
        $str[] ='Python';
    }
    echo "Môn học: ". implode(',',$str).'<br>';
    echo "Ghi chú: ".$_POST['ghiChu']."<br>";
}
if (isset($_POST['Huy'])) {
    $_POST['hoTen'] = null;
}
?>
<a href="form.html">Trở về trang trước </a>
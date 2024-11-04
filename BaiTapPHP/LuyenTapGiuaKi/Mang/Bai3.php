<?php

if (isset($_POST['kq'])) {
    $NamDuong = $_POST['NamDuong'];
    $mang_can = array("Quý","Giáp","Ất","Binh","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
    $mang_chi = array("Hợi","Tý","Sửu","Dần","Mão","Thìn","Tỵ","Mùi","Thân","Dậu","Tuấn");
    $mang_hinh = array("hoi.jpg","ty.jpg","suu.jpg","dan.jpg","mao.jpg","thin.jpg","ty.jpg"
,"ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuan.jpg");
    $Nam = $NamDuong -3;
    $can = $Nam % 10;
    $chi = $Nam % 12;
    $NamAm = $mang_can[$can];
    $NamAm = $NamAm." ".$mang_chi[$chi];
    $hinh = $mang_hinh[$chi];
    $_POST['NamAm'] = $NamAm;
    $hinh_anh = "<img src='/img/images/$hinh'>";
}

?>


<form action="" method="post">
    <table style="background-color:blanchedalmond;">
        <tr style="background-color: blueviolet;">
            <th colspan="3" style="color: white;">
                TÍNH NĂM ÂM LỊCH
            </th>
        </tr>
        <tr>
            <td>
                Năm dương lịch
            </td>
            <td rowspan="2">
                <input type="submit" name="kq" value="=>">
            </td>
            <td>
                Năm âm lịch
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="NamDuong" value="<?php if(isset($_POST['NamDuong'])) echo $_POST['NamDuong'];?>">
            </td>
            <td>
                <input disabled type="text" name="NamAm" value="<?php if(isset($_POST['NamAm'])) echo $_POST['NamAm'];   ?> ">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <?php
                    echo $hinh_anh;
                ?>
            </td>
        </tr>
    </table>



</form>
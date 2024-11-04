<?php
    if (isset($_POST['dayso'])) {
        $dayso = $_POST['dayso'];
    }
    $arr = explode(",",$dayso);
    $ketqua = 0;
    if (isset($_POST['Tong'])) {
        $filename = 'dulieu_bai2.txt';
        $file = fopen($filename,'w');
        if ($file) {
            fwrite($file,$dayso);
            fclose($file);
        }
        for ($i=0; $i <count($arr) ; $i++) {
            $ketqua = $ketqua + $arr[$i];
       }

    }

?>
<form action="BaiTapMang_3.php" method="post">
    <table>
        <tr>
            <th colspan = "3">NHẬP VÀ TÍNH TRÊN DÃY SỐ </th>
        </tr>
        <tr>
            <td rowspan = "2">Nhập dãy số:</td>
            <td>
                <input type="text" name="dayso" value = "<?php echo $dayso;?>">
            </td>
            <td>(*)</td>
        </tr>
        <tr>
            <td>
                <input type="submit" name ="Tong" value="Tổng dãy số">
            </td>
        </tr>
        <tr>
            <td>Tổng dãy số</td>
            <td><input type="text" name="Kq" disabled value = "<?php echo $ketqua?>"></td>
        </tr>
    </table>
</form>
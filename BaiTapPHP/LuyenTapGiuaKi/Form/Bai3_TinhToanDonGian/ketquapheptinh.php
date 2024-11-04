<?php
$sothunhat = $_POST['sothunhat'];
$sothuhai = $_POST['sothuhai'];
    if (isset($_POST['tinh'])) {
        if ($_POST['pheptinh'] == 'cong' ) {
            $ketqua = $sothunhat + $sothuhai;
        }
        elseif ($_POST['pheptinh'] == 'tru' ) {
            $ketqua = $sothunhat - $sothuhai;
        }
        elseif ($_POST['pheptinh'] == 'nhan' ) {
            $ketqua = $sothunhat * $sothuhai;
        }
        elseif ($_POST['pheptinh'] == 'chia' ) {
            $ketqua = $sothunhat / $sothuhai;
        }
        $_POST['ketqua']=$ketqua;

    }
?>

<form action="" method="post">
<table>
    <tr>
        <th colspan="2">
            <p><b>PHÉP TÍNH TRÊN HAI SỐ</b></p>
        </th>
    </tr>
    <tr>
        <td>
            Chọn phép tính:
        </td>
        <td>
            <?php
            if (isset($_POST['pheptinh']) && $_POST['pheptinh'] =='cong') {
                echo 'Cộng';
            }
            if (isset($_POST['pheptinh']) && $_POST['pheptinh'] =='tru') {
                echo 'Trừ';
            }
            if (isset($_POST['pheptinh']) && $_POST['pheptinh'] =='nhan') {
                echo 'Nhân';
            }
            if (isset($_POST['pheptinh']) && $_POST['pheptinh'] =='chia') {
                echo 'Chia';
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Số thứ nhất:
        </td>
        <td>
            <input type="text" name="sothunhat" value="<?php if(isset($_POST['sothunhat'])) echo $_POST['sothunhat']?>">
        </td>
    </tr>
    <tr>
    <td>
            Số thứ hai:
        </td>
        <td>
            <input type="text" name="sothuhai" value="<?php if(isset($_POST['sothuhai'])) echo $_POST['sothuhai']?>">
        </td>
    </tr>
    <tr>
    <td>
            Kết quả:
        </td>
        <td>
            <input type="text" name="ketqua" value="<?php echo $_POST['ketqua'] ?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <a href="pheptinh.php">Quay lại trang trước</a>
        </td>     
    </tr>
</table>
</form>
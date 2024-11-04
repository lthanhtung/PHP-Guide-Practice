<?php
$_POST['chuyenhuong']='';
if (isset($_POST['tinh'])) {
    $sothunhat = $_POST['sothunhat'];
    $sothuhai = $_POST['sothuhai'];    
}

?>
<form action="ketquapheptinh.php" method="post">

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
                <input type="radio" name="pheptinh" value="cong">Cộng
                <input type="radio" name="pheptinh" value="tru">Trừ
                <input type="radio" name="pheptinh" value="nhan">Nhân
                <input type="radio" name="pheptinh" value="chia">Chia
            </td>
        </tr>
        <tr>
            <td>
                Số thứ nhất:
            </td>
            <td>
                <input required type="text" name="sothunhat" value="<?php if (isset($_POST['sothunhat'])) echo $_POST['sothunhat'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Số thứ hai:
            </td>
            <td>
                <input required type="text" name="sothuhai" value="<?php if (isset($_POST['sothuhai'])) echo $_POST['sothuhai'] ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="tinh" value="Tính">
            </td>

        </tr>
    </table>
</form>
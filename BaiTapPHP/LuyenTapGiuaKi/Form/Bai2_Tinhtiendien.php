<?php
define('dongia', 20000);
$_POST['dongia'] = dongia;
if (isset($_POST['tinh'])) {
    $chuho = $_POST['chuho'];
    $_chisocu  = $_POST['chisocu'];
    $_chisomoi  = $_POST['chisomoi'];
    if (is_numeric($_chisocu) && is_numeric($_chisomoi)) {
        if ($_chisocu > 0 && $_chisomoi > 0) {
            if ($_chisomoi > $_chisocu) {
                $_POST['sotien'] = ($_chisomoi - $_chisocu) * dongia;
            }
        }
    }
}
?>



<form action="Bai2_Tinhtiendien.php" method="post">
    <table style="background-color: orchid;">
        <tr>
            <th colspan="3" style="background-color: orange ;">
                THANH TOÁN TIỀN ĐIỆN
            </th>
        </tr>
        <tr>
            <td>
                Tên chủ hộ
            </td>
            <td>
                <input type="text" name="chuho" value="<?php if (isset($_POST['chuho'])) echo $_POST['chuho'];   ?>">
            </td>
        </tr>
        <tr>
            <td>
                Chỉ số cũ:
            </td>
            <td>
                <input type="text" name="chisocu" value="<?php if (isset($_POST['chisocu'])) echo $_POST['chisocu']; ?>">
            </td>
            <td>
                (Kw)
            </td>
        </tr>
        <tr>
            <td>
                Chỉ số mới:
            </td>
            <td>
                <input type="text" name="chisomoi" value="<?php if (isset($_POST['chisomoi'])) echo $_POST['chisomoi']; ?>">
            </td>
            <td>
                (Kw)
            </td>
        </tr>
        <tr>
            <td>
                Đơn giá:
            </td>
            <td>
                <input type="text" name="dongia" value="<?php if (isset($_POST['dongia'])) echo $_POST['dongia']; ?>">
            </td>
            <td>
                (VNĐ)
            </td>
        </tr>
        <tr>
            <td>
                Số tiền thanh toán:
            </td>
            <td>
                <input disabled type="text" name="sotien" value="<?php if (isset($_POST['sotien'])) echo $_POST['sotien']; ?>">
            </td>
            <td>
                (VNĐ)
            </td>
        </tr>
        <tr>
            <td align="center" colspan="3">
                <input type="submit" name="tinh" value="Tính">
            </td>
        </tr>
    </table>
</form>
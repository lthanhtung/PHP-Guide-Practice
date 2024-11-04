<?php


if (isset($_POST['tinh'])) {
    $chieuDai = $_POST['chieuDai'];
$chieuRong = $_POST['chieuRong'];
    $dienTich = $chieuDai *$chieuRong;
    $_POST['dienTich'] = $dienTich;
}
?>



<form action="" method="post">
    <table style="background-color: greenyellow;">
        <tr style="background-color: yellow;">
            <th colspan="2" style="color: brown;font-size: 20px;">
                DIỆN TÍCH HÌNH CHỮ NHẬT
            </th>
        </tr>
        <tr>
            <td>
                Chiều dài:
            </td>
            <td>
                <input type="text" name="chieuDai" value="<?php if(isset($_POST['chieuDai'])) echo $_POST['chieuDai'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                Chiều rộng:
            </td>
            <td>
                <input type="text" name="chieuRong" value="<?php if(isset($_POST['chieuRong'])) echo $_POST['chieuRong'] ?>">
            </td>

        </tr>
        <tr>
            <td>
                Diện tích:
            </td>
            <td>
                <input disabled type="text" name="dienTich" value="<?php if(isset($_POST['dienTich'])) echo $_POST['dienTich'] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="tinh" value="Tính">
            </td>
        </tr>
    </table>
</form>
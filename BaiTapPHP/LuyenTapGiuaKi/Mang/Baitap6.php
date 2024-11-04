<?php
    if (isset($_POST['timkiem'])) {
        $mang = array();
        $mang = explode(',',$_POST['nhapmang']);
        function timkiem(){
            global $mang;
            foreach ($mang as $k =>$value) {
                if ($value == $_POST['socantim']) {
                        return "Tìm thấy ".$value." tại vị trí thứ $k của mảng";
                }
                
            }
            return "không tìm thấy";
        }

        $_POST['xuatmang'] = implode(',',$mang);
        $_POST['ketquatk'] = timkiem();
    }
?>

<form action="" method="post">
<table style="background-color: darkgray;">
    <tr>
        <th colspan="2">
            TÌM KIẾM
        </th>
    </tr>
    <tr>
        <td>Nhập mảng:</td>
        <td>
            <input type="text" name="nhapmang" value="<?php if(isset($_POST['nhapmang'])) echo $_POST['nhapmang'] ?>">
        </td>
    </tr>
    <tr>
        <td>Nhập số cần tìm:</td>
        <td>
            <input type="text" name="socantim" value="<?php if(isset($_POST['socantim'])) echo $_POST['socantim'] ?>">
        </td>
    </tr>
    <tr>
        <td align="center" colspan="2">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </td>
       
    </tr>
    <tr>
        <td>Mảng:</td>
        <td>
            <input disabled type="text" name="xuatmang" value="<?php if(isset($_POST['xuatmang'])) echo $_POST['xuatmang'] ?>">
        </td>
    </tr>
    <tr>
        <td>Kết quả tìm kiếm</td>
        <td>
            <input disabled type="text" name="ketquatk" value="<?php if(isset($_POST['ketquatk'])) echo $_POST['ketquatk'] ?>">
        </td>
    </tr>
    <tr>
        <td colspan="2">(Các thành phần trong mảng sẽ cách nhau bằng dấu",")</td>
    </tr>


</table>



</form>
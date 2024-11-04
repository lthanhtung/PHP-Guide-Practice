<?php
    if (isset($_POST['thuchien'])) {
        $a = $_POST['mangA'];
        $b = $_POST['mangB'];
        $mangA = explode(',',$a);
        $mangB = explode(',',$b);
        $_POST['slmangA'] = count($mangA); 
        $_POST['slmangB'] = count($mangB);
        $MangC = array_merge($mangA,$mangB);
        $_POST['mangC'] = implode(',',$MangC);
        sort($MangC);
        $_POST['Ctangdan'] = implode(',',$MangC);
        rsort($MangC);
        $_POST['Cgiamdan'] = implode(',',$MangC);
       
    }



?>
<form action="" method="post">
<table style="background-color: darkgray;">
    <tr>
        <th colspan="2">
            ĐẾM PHẦN TỬ, GHÉP MẢNG VÀ SẮP XẾP
        </th>
    </tr>
    <tr>
        <td>Mảng A:</td>
        <td>
            <input type="text" name="mangA" value="<?php if(isset($_POST['mangA'])) echo $_POST['mangA'] ?>">
        </td>
    </tr>
    <tr>
        <td>Mảng B:</td>
        <td>
            <input type="text" name="mangB" value="<?php if(isset($_POST['mangB'])) echo $_POST['mangB'] ?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="thuchien" value="Thực hiện">
        </td>
       
    </tr>
    <tr>
        <td>Số phần tử mảng A:</td>
        <td>
            <input disabled type="text" name="slmangA" value="<?php if(isset($_POST['slmangA'])) echo $_POST['slmangA'] ?>">
        </td>
    </tr>
    <tr>
        <td>Số phần tử mảng B:</td>
        <td>
            <input disabled type="text" name="slmangB" value="<?php if(isset($_POST['slmangB'])) echo $_POST['slmangB'] ?>">
        </td>
    </tr>
    <tr>
        <td>Mảng C:</td>
        <td>
            <input disabled type="text" name="mangC" value="<?php if(isset($_POST['mangC'])) echo $_POST['mangC'] ?>">
        </td>
    </tr>
    <tr>
        <td>Mảng C tăng dần</td>
        <td>
            <input disabled type="text" name="Ctangdan" value="<?php if(isset($_POST['Ctangdan'])) echo $_POST['Ctangdan'] ?>">
        </td>
    </tr>
    <tr>
        <td>Mảng C giảm dần</td>
        <td>
            <input disabled type="text" name="Cgiamdan" value="<?php if(isset($_POST['Cgiamdan'])) echo $_POST['Cgiamdan'] ?>">
        </td>
    </tr>
    <tr>
        <td colspan="2">(Các thành phần trong mảng sẽ cách nhau bằng dấu",")</td>
    </tr>


</table>

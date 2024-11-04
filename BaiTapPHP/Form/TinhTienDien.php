<html>
<body>
<?php 
if(isset($_POST['ChuHo']))  
    $ChuHo=trim($_POST['ChuHo']);
    if (is_null($ChuHo)) {
        echo "<font color='red'>Vui lòng nhập tên chủ hộ! </font>"; 
    }
else $ChuHo=0;
if(isset($_POST['ChiSoCu'])) 
    $ChiSoCu=trim($_POST['ChiSoCu']); 
else $ChiSoCu=0;
if(isset($_POST['tinh']))
        if (is_numeric($ChuHo) && is_numeric($ChiSoCu))  
            $ChiSoMoi=$ChuHo * $ChiSoCu;
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $ChiSoMoi="";
            }
else $ChiSoMoi=0;
?>
<form align='center' action="" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><h3>THANH TOÁN TIỀN ĐIỆN</h3></th>
    </thead>
    <tr><td>Tên chủ hộ:</td>
     <td><input type="text" name="ChuHo" value="<?php  echo $ChuHo;?> "/></td>
    </tr>
    <tr><td>Chỉ số cũ:</td>
     <td><input type="text" name="ChiSoCu" value="<?php  echo $ChiSoCu;?> "/></td>
    </tr>
    <tr><td>Chỉ số mới:</td>
     <td><input type="text" name="ChiSoMoi" disabled="disabled" value="<?php  echo $ChiSoMoi;?> "/></td>
    </tr>
    <tr><td>Đơn giá:</td>
     <td><input type="text" name="DonGia" disabled="disabled" value="<?php  echo $DonGia;?> "/></td>
    </tr>
    <tr><td>Số tiền thanh toán:</td>
     <td><input type="text" name="ThanhToan" disabled="disabled" value="<?php  echo $ThanhToan;?> "/></td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>
<html>
<body>
<?php 
if(isset($_POST['Canh1']))  
    $Canh1=trim($_POST['Canh1']); 
else $Canh1=0;
if(isset($_POST['Canh2'])) 
    $Canh2=trim($_POST['Canh2']); 
else $Canh2=0;
if (isset($_POST['Canh3'])) 
    $Canh3 = trim($_POST['Canh3']);
else $Canh3 = 0;
if(isset($_POST['tinh']))
        if (is_numeric($Canh1) && is_numeric($Canh2) && is_numeric($Canh3))
        {
            if ($Canh1 >0 && $Canh2 >0 && $Canh3 >0  && ($Canh1 + $Canh2) > $Canh3 && ($Canh2 + $Canh3) > $Canh1 && ($Canh1 + $Canh3) > $Canh2 ) {
                $Chuvi = $Canh1 + $Canh2 + $Canh3;

            }
        }
            else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $Chuvi="";
            }
    else $Chuvi=0;
?>
<form align='center' action="" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><h3>CHU VI VÀ DIỆN TÍCH TAM GIÁC</h3></th>
    </thead>
    <tr><td>Cạnh 1:</td>
     <td><input type="text" name="Canh1" value="<?php  echo $Canh1;?> "/></td>
    </tr>
    <tr><td>Cạnh 2:</td>
     <td><input type="text" name="Canh2" value="<?php  echo $Canh2;?> "/></td>
    </tr>
    <tr><td>Cạnh 3:</td>
     <td><input type="text" name="Canh3" value="<?php  echo $Canh3;?> "/></td>
    </tr>
    <tr><td>ChuVi:</td>
     <td><input type="text" name="" disabled="disabled" value="<?php  echo $Chuvi;?> "/></td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>
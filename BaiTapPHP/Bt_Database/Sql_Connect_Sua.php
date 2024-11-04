<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Thông tin hãng sữa</title>

</head>

<body>

<?php

 

  // Ket noi CSDL

//require("connect.php");

$conn = mysqli_connect ('localhost', 'root', '', 'qlbansua') 

		OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

$sql = 'select Ten_sua,Hinh,Trong_luong,Don_gia, Ten_hang_sua,Ten_loai
from sua,hang_sua,loai_sua
where sua.Ma_hang_sua = hang_sua.Ma_hang_sua and sua.Ma_loai_sua = loai_sua.Ma_loai_sua
';

$result = mysqli_query($conn, $sql);



echo "<p align='center'><font size='5' color='blue'> THÔNG TIN CÁC SẢN PHẨM </font></P>";

 echo "<table align='center' width='350' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";

 if(mysqli_num_rows($result)<>0)

 {	 $stt=1;

	while($rows=mysqli_fetch_array($result))

	{          echo "<tr>";    
 		    echo "<td style=width:50>";
            echo "<img src=/img/Hinh_sua/{$rows['Hinh']} alt='Hình ảnh' width = 100px height = 100>";
            echo "</td>";

		     echo " <td><b>{$rows['Ten_sua']} </b><br>";

		     echo "{$rows['Ten_hang_sua']} <br>";

             echo "{$rows['Ten_loai']} <br>";

             echo "{$rows['Trong_luong']} <br>";

             echo "{$rows['Don_gia']}</td>";

		     echo "</tr>";
	}

 }

echo"</table>";

?>
</body>
img
</html>
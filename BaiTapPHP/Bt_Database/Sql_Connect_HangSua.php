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

$sql = 'select Ma_Hang_Sua,Ten_Hang_Sua,Dia_chi,Dien_thoai,Email from hang_sua';

$result = mysqli_query($conn, $sql);



echo "<p align='center'><font size='5' color='blue'> THÔNG TIN Hãng Sữa</font></P>";

 echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";

 echo '<tr>

    <th width="50">STT</th>

     <th width="50">Mã Hãng sữa</th>

    <th width="150">Tên hãng sữa</th>

    <th width="200">Địa chỉ</th>
    
    <th width="200">Điện thoại</th>
    
    <th width="200">Email</th>

</tr>';



 if(mysqli_num_rows($result)<>0)

 {	 $stt=1;

	while($rows=mysqli_fetch_row($result))

	{          echo "<tr>";

		     echo "<td>$stt</td>";

		     echo "<td>$rows[0]</td>";

		     echo "<td>$rows[1]</td>";

		     echo "<td>$rows[2]</td>";

             echo "<td>$rows[3]</td>";

             echo "<td>$rows[4]</td>";

		     echo "</tr>";

	             $stt+=1;

	}

 }

echo"</table>";

?>

</body>

</html>
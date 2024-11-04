<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">

<title>THÔNG TIN KHÁCH HÀNG</title>

</head>

<body>

<?php

 

  // Ket noi CSDL

//require("connect.php");

$conn = mysqli_connect ('localhost', 'root', '', 'qlbansua') 

		OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

$sql = 'select Ma_khach_hang,Ten_khach_hang,Phai,Dia_chi,Dien_thoai from khach_hang';

$result = mysqli_query($conn, $sql);



echo "<p align='center'><font size='5' color='blue'> THÔNG TIN KHÁCH HÀNG</font></P>";

 echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";

 echo '<tr>

    <th width="50">STT</th>

     <th width="50">Mã khách hàng</th>

    <th width="150">Tên khách hàng</th>

    <th width="50">Giới tính</th>

    <th width="300">Địa chỉ</th>

    <th width="150">Số điện thoại</th>

</tr>';



 if(mysqli_num_rows($result)<>0)

 {	 $stt=1;

	while($rows=mysqli_fetch_row($result))

	{   
        // Kiểm tra dòng chẵn lẻ và thay đổi màu nền
        $bgcolor = ($stt % 2 == 0) ? 'lightblue' : 'white'; // Dòng chẵn màu xanh nhạt, lẻ màu trắng
        
        echo "<tr style='background-color: $bgcolor'>";

		     echo "<td>$stt</td>";

		     echo "<td>$rows[0]</td>";

		     echo "<td>$rows[1]</td>";
           /* Cach 1 :Su dung icon
             if ($rows[2] == "1") {
                $rows[2] ='<i class="bi bi-gender-male"></i>';
                echo "<td>$rows[2]</td>";
             }
             else {
                $rows[2] ='<i class="bi bi-gender-female"></i>';
                echo "<td>$rows[2]</td>";
             }
		     */
            //Cach 2: Su dung anh
            if ($rows[2] == "0") {
                $row[2] = '<img src="/img/anhNam.jpg" alt="male" style="width:50px; height:50px;">';
                echo "<td>$row[2]</td>";
            } else {
                $row[2] = '<img src="/img/anhNu.jpg" alt="female" style="width:50px; height:50px;">';
                echo "<td>$row[2]</td>";
            }
            


        
             echo "<td>$rows[3]</td>";

             echo "<td>$rows[4]</td>";

		     echo "</tr style>";

	             $stt+=1;

	}

 }

echo"</table>";


?>

</body>
</html>
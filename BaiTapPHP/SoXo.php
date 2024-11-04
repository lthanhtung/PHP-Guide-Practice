<?php
echo "Sổ xố Đại học Nha Trang<br><br>"; // In tiêu đề xổ số

function SoXo()
{
    echo "<table border='1' style='width: 50%; border-collapse: collapse;'>"; // Bắt đầu tạo bảng

    // Giải 8
    echo "<tr>";
echo "<td>" . "Giải 8" . "</td>";
echo "<td>";
global $n;
$n = rand(0, 99); // Tạo số ngẫu nhiên từ 0 đến 999

// Kiểm tra và in ra số với 3 chữ số
echo str_pad($n, 2, "0", STR_PAD_LEFT); // Đảm bảo số có 2 chữ số bằng cách thêm số 0 vào trước nếu cần
echo "</td>";
echo "</tr>";

    // Giải 7
    echo "<tr>";
    echo "<td>" . "Giải 7" . "</td>";
    echo "<td>";
    global $n;
    $n = rand(0, 999); // Tạo số ngẫu nhiên từ 0 đến 999
    
    // Kiểm tra và in ra số với 3 chữ số
    echo str_pad($n, 3, "0", STR_PAD_LEFT); // Đảm bảo số có 3 chữ số bằng cách thêm số 0 vào trước nếu cần
    echo "</td>";
    echo "</tr>";
    
    // Giải 6
    echo "<tr>";
echo "<td>" . "Giải 6" . "</td>";

global $numbers; // Biến toàn cục để lưu trữ các số
$numbers = array(); // Khởi tạo mảng rỗng

// Tạo 3 số ngẫu nhiên từ 1000 đến 9999
for ($i = 0; $i < 3; $i++) {
    $numbers[$i] = rand(1000, 9999); // Số ngẫu nhiên có 4 chữ số
}

// In ra các phần tử của mảng, mỗi phần tử trong một ô
foreach ($numbers as $number) {
    echo "<td>" . $number . "</td>"; // Mỗi số sẽ nằm trong một ô riêng
}

echo "</tr>";



          
    // Giải 5
    echo "<tr>";
    echo "<td>" . "Giải 7" . "</td>";
    echo "<td>";
    global $n;
    $n = rand(0, 9999); // Tạo số ngẫu nhiên từ 0 đến 999
    
    // Kiểm tra và in ra số với 3 chữ số
    echo str_pad($n, 4, "0", STR_PAD_LEFT); // Đảm bảo số có 4 chữ số bằng cách thêm số 0 vào trước nếu cần
    echo "</td>";
    echo "</tr>";
    

    // Giải 4
    echo "<tr>";
echo "<td>" . "Giải 4" . "</td>";

global $numbers; // Biến toàn cục để lưu trữ các số
$numbers = array(); // Khởi tạo mảng rỗng

// Tạo 7 số ngẫu nhiên từ 10000 đến 99999
for ($i = 0; $i < 7; $i++) {
    $numbers[$i] = rand(10000, 99999); // Số ngẫu nhiên có 5 chữ số
}

// In ra các phần tử của mảng, mỗi phần tử trong một ô
foreach ($numbers as $number) {
    echo "<td>" . $number . "</td>"; // Mỗi số sẽ nằm trong một ô riêng
}

echo "</tr>";


    // Giải 3
    echo "<tr>";
echo "<td>" . "Giải 3" . "</td>";

global $numbers; // Biến toàn cục để lưu trữ các số
$numbers = array(); // Khởi tạo mảng rỗng

// Tạo 2 số ngẫu nhiên từ 10000 đến 99999
for ($i = 0; $i < 2; $i++) {
    $numbers[$i] = rand(10000, 99999); // Số ngẫu nhiên có 5 chữ số
}

// In ra các phần tử của mảng, mỗi phần tử trong một ô
foreach ($numbers as $number) {
    echo "<td>" . $number . "</td>"; // Mỗi số sẽ nằm trong một ô riêng
}

echo "</tr>";


    // Giải 2
    echo "<tr>";
    echo "<td>" . "Giải 2" . "</td>";
    echo "<td>";
    global $n;
    $n = rand(0, 99999); // Tạo số ngẫu nhiên từ 0 đến 99999
    
    // Kiểm tra và in ra số với 3 chữ số
    echo str_pad($n, 5, "0", STR_PAD_LEFT); // Đảm bảo số có 5 chữ số bằng cách thêm số 0 vào trước nếu cần
    echo "</td>";
    echo "</tr>";
    

    // Giải 1
    echo "<tr>";
    echo "<td>" . "Giải 1" . "</td>";
    echo "<td>";
    global $n;
    $n = rand(0, 99999); // Tạo số ngẫu nhiên từ 0 đến 99999
    
    // Kiểm tra và in ra số với 3 chữ số
    echo str_pad($n, 5, "0", STR_PAD_LEFT); // Đảm bảo số có 5 chữ số bằng cách thêm số 0 vào trước nếu cần
    echo "</td>";
    echo "</tr>";
    
    // Giải DB
    echo "<tr>";
    echo "<td>" . "Giải DB" . "</td>";
    echo "<td>";
    global $n;
    $n = rand(0, 999999); // Tạo số ngẫu nhiên từ 0 đến 999999
    
    // Kiểm tra và in ra số với 3 chữ số
    echo str_pad($n, 6, "0", STR_PAD_LEFT); // Đảm bảo số có 6 chữ số bằng cách thêm số 0 vào trước nếu cần
    echo "</td>";
    echo "</tr>";

    echo "</table>"; // Kết thúc bảng
}

SoXo(); // Gọi hàm SoXo()
?>

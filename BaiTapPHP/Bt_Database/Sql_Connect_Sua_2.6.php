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

    $conn = mysqli_connect('localhost', 'root', '', 'qlbansua')

        or die('Could not connect to MySQL: ' . mysqli_connect_error());

    mysqli_set_charset($conn, 'UTF8');
    $rowsPerPage = 10; //số mẩu tin trên mỗi trang, giả sử là 10
    if (!isset($_GET['page'])) {
        $_GET['page'] = 1;
    }
    //vị trí của mẩu tin đầu tiên trên mỗi trang
$offset =($_GET['page']-1)*$rowsPerPage; 

    $sql = 'select Ten_sua,Hinh,Trong_luong,Don_gia from sua LIMIT '. $offset . ', ' .$rowsPerPage ;

    $result = mysqli_query($conn, $sql);


    echo "<p align='center'><font size=
    '5' color='blue'> THÔNG TIN CÁC SẢN PHẨM </font></P>";

    echo "<table align='center' width='500' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";

    if (mysqli_num_rows($result) <> 0) {
        $stt = 1;
        echo "<tr>";
        while ($rows = mysqli_fetch_array($result)) { 
                echo "<td width = 100 align='center'>";
                echo "<b>{$rows['Ten_sua']} </b><br>";
                echo "{$rows['Trong_luong']} -{$rows['Don_gia']} <br>";
                echo "<img src=/img/Hinh_sua/{$rows['Hinh']} alt='Hình ảnh' width = 100>";
                echo "</td>";
            if ($stt % 5 == 0) {
                echo "</tr><tr>";
            }
            $stt += 1;
        }
        echo "</tr>";
    }

    echo "</table>";
    $re = mysqli_query($conn, 'select * from sua');

    //tổng số mẩu tin cần hiển thị
    $numRows = mysqli_num_rows($re);
    
    //tổng số trang
    $maxPage = floor($numRows / $rowsPerPage) + 1;
    
    echo "<div style='text-align: center; margin: 10px 0;'>";
    //gắn thêm nút Back
    if ($_GET['page'] > 1)
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . ">Back</a> ";
    
    //tạo link tương ứng tới các trang
    for ($i = 1; $i <= $maxPage; $i++) {
        if ($i == $_GET['page']) {
            echo '<b>Trang' . $i . '</b> '; //trang hiện tại sẽ được bôi đậm
        } else
            echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . $i . ">Trang" . $i . "</a> ";
    }
    
    //gắn thêm nút Next
    if ($_GET['page'] < $maxPage)
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">Next</a>";
    
    echo "</div>";

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        p{
            text-align: center; /* Căn giữa nội dung */
            font-weight: bold; /* In đậm */
            color: blue; /* Màu xanh */
            font-size: 24px; /* Tăng kích thước chữ nếu cần */
        }
        .row {
            display: flex;
            justify-content: space-around; /* Căn đều các bảng cửu chương */
            margin-bottom: 30px;
        }
        .table {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <p> BẢNG CỬU CHƯƠNG </p>
    <div class="row">
        <?php
       
        // Hiển thị bảng cửu chương từ 1 đến 5
        for ($i = 1; $i <= 5; $i++) {
            echo "<div class='table'>";
            echo "<strong>Bảng cửu chương $i</strong><br>";
            for ($j = 0; $j <= 10; $j++) {
                $giatri = $i * $j;
                echo "$i * $j = $giatri<br>";
            }
            echo "</div>";
        }
        ?>
    </div>

    <div class="row">
        <?php
        // Hiển thị bảng cửu chương từ 6 đến 10
        
        for ($i = 6; $i <= 10; $i++) {
            echo "<div class='table'>";
            echo "<strong>Bảng cửu chương $i</strong><br>";
            for ($j = 0; $j <= 10; $j++) {
                $giatri = $i * $j;
                echo "$i * $j = $giatri<br>";
            }
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>

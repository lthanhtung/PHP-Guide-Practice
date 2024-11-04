<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết Quả Phép Tính</title>
    <style>
        /* CSS để định dạng giao diện */
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 0 auto; text-align: center; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <div class="container">
        <h2>KẾT QUẢ PHÉP TÍNH</h2>
        <?php
        if (isset($_POST['tinh'])) {
            $pheptinh = $_POST['pheptinh'];
            $so1 = $_POST['so1'];
            $so2 = $_POST['so2'];
            
            // Kiểm tra nếu các giá trị không trống và là số
            if ($so1 === '' || $so2 === '' || !is_numeric($so1) || !is_numeric($so2)) {
                echo "<p>Vui lòng nhập hai số hợp lệ.</p>";
                echo '<a href="javascript:window.history.back(-1);">Trở về trang trước</a>';
            } else {
                // Tất cả các giá trị hợp lệ, thực hiện phép tính
                $ketqua = 0;
                switch ($pheptinh) {
                    case 'cong':
                        $ketqua = $so1 + $so2;
                        $phep = "Cộng";
                        break;
                    case 'tru':
                        $ketqua = $so1 - $so2;
                        $phep = "Trừ";
                        break;
                    case 'nhan':
                        $ketqua = $so1 * $so2;
                        $phep = "Nhân";
                        break;
                    case 'chia':
                        if ($so2 != 0) {
                            $ketqua = $so1 / $so2;
                            $phep = "Chia";
                        } else {
                            echo "<p>Không thể chia cho 0.</p>";
                            echo '<a href="javascript:window.history.back(-1);">Trở về trang trước</a>';
                            exit();
                        }
                        break;
                }
                echo "<p>Phép tính đã chọn: $phep</p>";
                echo "<p>Số 1: $so1</p>";
                echo "<p>Số 2: $so2</p>";
                echo "<p>Kết quả: $ketqua</p>";
            }
        }
        ?>
        <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phép Tính Trên Hai Số</title>
    <style>
        /* CSS để định dạng giao diện */
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 0 auto; }
        label, input[type="radio"] { display: block; margin: 10px 0; }
        .center { text-align: center; }
        input[type="submit"] { padding: 5px 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="center">PHÉP TÍNH TRÊN HAI SỐ</h2>
        <form action="ketquapheptinh1.php" method="POST">
            <label>Chọn phép tính:</label>
            <input type="radio" name="pheptinh" value="cong" required> Cộng
            <input type="radio" name="pheptinh" value="tru" required> Trừ
            <input type="radio" name="pheptinh" value="nhan" required> Nhân
            <input type="radio" name="pheptinh" value="chia" required> Chia
            
            <label>Số thứ nhất:</label>
            <input type="text" name="so1" required>
            
            <label>Số thứ hai:</label>
            <input type="text" name="so2" required>
            
            <div class="center">
                <input type="submit" name="tinh" value="Tính">
            </div>
        </form>
    </div>
</body>
</html>

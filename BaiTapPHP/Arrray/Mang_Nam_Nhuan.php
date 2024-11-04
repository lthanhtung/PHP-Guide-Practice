<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Năm Nhuận</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        table {
            background-color: white;
            border-collapse: collapse;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }
        th {
            padding: 15px;
            font-size: 1.2em;
            background-color: #007bff;
            color: white;
            border-radius: 8px 8px 0 0;
        }
        td {
            padding: 10px;
            font-size: 1em;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        textarea {
            resize: none;
        }
        td[colspan="2"] {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
    if (isset($_POST['nam'])) {
        $nam = $_POST['nam'];
    }
    $kq = "";  // Chuỗi để lưu kết quả

    // Hàm kiểm tra năm nhuận
    function timNamNhuan($Nam)
    {
        if ($Nam % 400 == 0 || ($Nam % 4 == 0 && $Nam % 100 != 0)) {
            return 1; // Năm nhuận
        }
        return 0; // Không phải năm nhuận
    }

    // Xử lý sau khi nhấn nút submit
    if (isset($_POST['tinhnamnhuan'])) {
        // Lặp qua các năm từ năm nhập vào đến năm 2000
        foreach (range($nam, 2000) as $Year) {
            if (timNamNhuan($Year) == 1) {
                $kq .= $Year . " ";  // Nối các năm nhuận vào chuỗi $kq
            }
        }
    }
?>

<!-- Form nhập liệu -->
<form action="Mang_Nam_Nhuan.php" method="post">
    <table>
        <tr>
            <th colspan="2">Năm nhập vào nhỏ hơn năm 2000:</th>
        </tr>
        <tr>
            <th colspan="2">TÌM NĂM NHUẬN</th>
        </tr>
        <tr>
            <td>Năm:</td>
            <td>
                <input type="text" name="nam" value="<?php echo htmlspecialchars($nam); ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea cols="70" rows="10" name="ketqua" disabled><?php echo htmlspecialchars($kq); ?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="tinhnamnhuan" value="Tìm năm nhuận">
            </td>
        </tr>
    </table>
</form>

</body>
</html>

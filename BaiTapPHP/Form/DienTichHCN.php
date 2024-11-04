<html>
    <body>
        <h1><b> DIỆN TÍCH HÌNH CHỮ NHẬT</b> </h1>
        <form action="DienTichHCN.php" method="post">
        Chiều dài: <input type="text" name="TextCD" value ="
        <?php
        if (isset($_POST['TextCD'])) {
            echo $_POST['TextCD'];
        }
        ?> ">
        <br>

        Chiều rộng:<input type="text" name="TextCR" value ="
        <?php
        if (isset($_POST['TextCR'])) {
            echo $_POST['TextCR'];
        }
        ?> ">
        <br>

        Diện Tích: <input type="text" name="Kq" disabled>
        <br>
        <input type="submit" value="Tính" name = "Tinh">
        </form>
        <?php
        if (isset($_POST['Tinh'])) {
            if (is_numeric($_POST['TextCD']) && is_numeric($_POST['TextCR'])) {
                $_POST['Tinh'] = $_POST['TextCD'] * $_POST['TextCR'];
                echo $_POST['Tinh'];
                
            }
        }
        ?>
    </body>
</html>
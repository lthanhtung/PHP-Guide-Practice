<?php
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST','localhost');
define('DB_NAME','qlbansua');

$conn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
    or die ('Khong the ket noi db' .mysqli_connect_error());

mysqli_set_charset($conn,'utf8');
?>
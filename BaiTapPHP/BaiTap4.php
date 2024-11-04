<?php
$n = rand(-50,50);
$doiso;
function Bai4a(){
    global $n;
    global $doiso;
    if ($n > 0) {
        echo "$n là số dương";
    }
    else {
    $doiso = $n*-1;
        echo "$n là số âm và đối số của $n là:$doiso";
    }
}

function Bai4b(){
    global $n;
    if ($n<0) {
        $n = $n * -1;

    }
    echo "Số lượng phần tử của mảng: $n<br>";
    $a = array();
        echo "Mảng vừa nhập là";
        for ($i=0; $i < $n; $i++) {
        $a[$i] = rand(-100,100);
        echo "   $a[$i]   ";
        }
}

function Bai4c()
{
    global $n;
    $tong = 0;
    if ($n<0) {
        $n = $n * -1;
    }
    echo "Số lượng phần tử của mảng: $n<br>";
    $a = array();
        echo "Mảng vừa nhập là";
        for ($i=0; $i < $n; $i++) {
        $a[$i] = rand(-100,100);
        echo "   $a[$i]   ";
    
        if ($i % 2 != 0) {
            $tong = $tong + $a[$i];
        }
   
    }
    echo "<br>Tổng phần tử ở vị trí lẻ: $tong ";
}


Bai4a();
echo"<br><br>";
Bai4b();
echo"<br><br>";
Bai4c();


?>
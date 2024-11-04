<?php
define("N",100000);
$n = rand(1,N);
function Bai3a(){
    global $n;
    echo "gia trị của n là $n";
    $dem = 0;
    for ($i=1; $i <=$n ; $i++) { 
        if ($n % $i == 0) {
            $dem++;
        }
    
    }
    if ($dem == 2) {
        echo "<br> $n là số nguyên tố";
    }
    else {
        echo "<br> $n không là số nguyên tố";
    }
}
function Bai3b()
{
    global $n;
    echo "Giá trị của n: $n<br>";
    
    $tong = 0;
    
    for ($i = 0; $i < $n; $i++) { 
        if ($i >= 0 && $i < 100) {
            if ($i % 2 != 0) {
                $tong = $tong + $i;
               
            }
        }
    }

    echo "Tổng cuối cùng của các số lẻ: $tong";
}

function Bai3c()
{
    global $n;
    $dem = 0;
    $a = $n;
    while ((int)$n !=0) {
        $sodu = (float)$n % 10;
        $dem++;
        $n = (int)$n / 10;
        
    }
    echo "<br>$a có $dem chữ số";
}
//Bai3a();
//echo "<br>";
Bai3b();
//Bai3c();

?>
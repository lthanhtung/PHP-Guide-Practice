<?php
$m = rand(2,5);
$n = rand(2,5);
//Ma Trận
function Bai5a()
{
    //Tạo ma trận 
    global $m;
    global $n;
    $a = array();
    echo "Ma trận vừa nhập là:<br>";
    for ($i=0; $i < $m; $i++) { 
        for ($j=0; $j < $n; $j++) { 
            $a[$i][$j] = rand(-100,100);
            echo $a[$i][$j];
            printf("\t");
        }
        echo "<br>";
    }
}
function Bai5b()
{
    
     //Tạo ma trận 
     global $m;
     global $n;
     $a = array();
     echo "Ma trận vừa nhập là:<br>";
     for ($i=0; $i < $m; $i++) { 
         for ($j=0; $j < $n; $j++) { 
             $a[$i][$j] = rand(-100,100);
             echo $a[$i][$j];
             printf("\t");
         }
         echo "<br>";
     }
 // Thay thế phần tử < 0 thành 0
 echo "Ma trận sau khi thay thế các phần tử âm bằng 0:<br>";
 for ($i = 0; $i < $m; $i++) { 
     for ($j = 0; $j < $n; $j++) { 
         if ($a[$i][$j] < 0) {
             $a[$i][$j] = 0;
         }
         echo $a[$i][$j] . "\t"; 
     }
     echo "<br>";
 }
}

Bai5a();
echo "<br> <br>";
Bai5b();
?>
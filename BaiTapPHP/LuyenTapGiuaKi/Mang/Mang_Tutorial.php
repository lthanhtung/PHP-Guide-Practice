<?php
//Khai báo mảng $a = arr(); 
// có 2 loại mảng:
//Mảng có key là chỉ số
 $a = array('1','2','3','dsdas4');
 $b = array('0'=>'1',"1" =>'1','2'=>'2');
 //echo var_dump($a); // vừa hiển thị tất cả các phần tử trong mảng bao khóa vừa,số lượng giá trị, giá trị)
 //echo var_export($a); chỉ hiển thị khóa và giá trị của khóa trog mảng
// foreach ($b as $k => $value) {
  //  echo $b[0];
 //}
//echo var_dump($b);
 //Mảng 2 chiều và mảng chỉ mục
 /* $c = array('cntt' => array('Hằng','Hưng','Thịnh'),'toan'=>array('Phuong','An'));//Cách khai báo và mảng chỉ mục

  foreach ($c as $k => $khoa) {
    echo $k;
    foreach ($khoa as $gv => $value) {
        echo $value;
    }
  }
*/
//mảng 3 chiều

$c = array('cntt' => array('giaovien'=>array('Lê Thị Bích Hằng','Nguyễn Đình Hưng','Đoàn Vũ Thịnh')));
foreach ($c as $k => $khoa) {
    echo $k;
    foreach ($khoa as $gv => $giaovien) {
        echo $gv;
      foreach ($giaovien as $key => $gtri) {
           echo "$key - $gtri";
       }
    }
    
}
    

?>
<?php
    $y = array('nva', 3=> 'abc' , 'x' => 5);
    //var_dump($y);
    $y[] = 10;
    echo "<br>";
   // var_dump($y);
    echo "<br>";
    $y[3] = 100;
   // var_dump($y);
    // //Cach 1: Dung cho mang co nhieu khoa khac kieu du lieu
    // foreach($y as $giatri){
    //     echo "Gia tri: $giatri<br>";
    // }

    // //Cach 2 lay luon ca key
    // foreach($y as $khoa => $giatri){
    //     echo "$khoa : $giatri <br>";
    // }


    // //Tao mang co gia tri tu 0 --> 10
    // $number = range(0,10,2);
    // print_r($number);
    // echo "<br>";
    // $n = $number; //Sao chep mang
    // print_r($n);

    //Mang 2 chieu
  /*  $list = array("CNTT" =>array("KTPM" => "Hang", "HTTH" => "Thuy", "MMT" => "Nam"),
                    "NN" => array("PD" => "Thu", "DL" => "Khanh"))
    foreach($list as $khoa=> $value){
        //in ra khoa mang
        echo "<h2> $khoa </h2><ul>";
        //in ra cac phan tu ung voi khoa
        foreach($value as $gv => $name)
        {
            echo "<li>$gv - $name</li>\n";
        }


        echo "</ul>";
    }
        */
?>
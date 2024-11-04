<?php
    $str = null;
    $n = $_POST['nhapmang'];
    $a = array();
    function nhapmang($n){
        global $a;
        for ($i=0; $i <$n ; $i++) { 
            $a[$i] = rand(-100,200);        
        }
        $str = implode(" ",$a);
        return $str;
    }
    function DemGiaTriChan($n){
        global $a;
        $b = '';
        $dem=0;
        for ($i=0; $i < $n; $i++) { 
           if ($a[$i] %2 == 0) {
                $b = $b.$a[$i].' ';
                $dem++;
           }
        }
        $str = $dem;
        return $str;
    }
    function DemslNhoHon100($n){
        global $a;
        $b = '';
        $dem = 0;
        for ($i=0; $i <$n ; $i++) { 
            if ($a[$i] < 100) {
                $b = $b.$a[$i]." ";
                $dem++;
            }
        }
        $str = $dem;
        return $str;
    }
    
    function tongLasoAm($n){
        global $a; $tong = 0;
        for ($i=0; $i < $n ; $i++) { 
            if ($a[$i] <0) {
                $tong = $tong + $a[$i];
            }
        }
        $str = $tong;
        return $str;
    }

    function inKecuoiLa0($n){
        global $a;
        $c= '';
        for ($i=0; $i <$n ; $i++) { 
            $b = $a[$i] %10;
            if ($b == 0) {
               $c = $c.$i.' '; 
            }
        }
        $str = $c;
        return $str;
    }

    function SapXepTang($n){
        global $a;
        $d = array();
        for ($i=0; $i <$n ; $i++) { 
            $b = $a[$i] %10;
            if ($b == 0) {
            $d[] = $a[$i];
            }
        }
        sort($d);
        $str =  implode(" ",$d);
        return $str;
    }
    
    if (isset($_POST['taomang'])) {
        if (is_numeric($_POST['nhapmang']) == true ) {
            nhapmang($n);
            DemGiaTriChan($n);
            DemslNhoHon100($n);
            tongLasoAm($n);
            inKecuoiLa0($n);
            SapXepTang($n);
            $str = "Mảng vừa nhập có ".$_POST['nhapmang']." phần tử là:".nhapmang($n)."&#13;&#10;";
            $str = $str."Số lượng giá trị chẵn là:".DemGiaTriChan($n)."&#13;&#10;";
            $str = $str."Số lượng giá trị < 100 là:".DemslNhoHon100($n)."&#13;&#10;";
            $str = $str."Tổng các số < 0 là:".tongLasoAm($n)."&#13;&#10;";
            $str = $str."Vị trí các số kề cuối = 0 là:".inKecuoiLa0($n)."&#13;&#10;";
            $str = $str."Sắp xếp tăng dần = 0 là:".SapXepTang($n)."&#13;&#10;";
            
        }
        else {
            $str = "Không thể tạo mảng";
        }
        $_POST['kq'] = $str;
    }
?>
<form action="" method="post">
    <table>
        <tr>
          <td>Nhập mảng:<input type="text" name="nhapmang" value="<?php if(isset($_POST['nhapmang'])) echo $_POST['nhapmang'];?>">
           <input type="submit" name="taomang" value="Tạo mảng"></td>
        </tr>
        <tr>
            <td colspan="2"><textarea disabled name="kq" cols="60" rows="8"><?php echo $_POST['kq'];?></textarea></td>
        </tr>
    </table>
</form>
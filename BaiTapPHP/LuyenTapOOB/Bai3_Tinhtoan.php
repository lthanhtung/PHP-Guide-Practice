<?php

abstract class Pheptinh{
    public abstract function ChucNang($tuso1,$mauso1,$tuso2,$mauso2);
}

class Cong extends Pheptinh{
    public function ChucNang($tuso1,$mauso1,$tuso2,$mauso2){
        $Tongtuso = $tuso1*$mauso2 + $tuso2*$mauso1;
        $Mauso = $mauso1 * $mauso2;  
        if ($Tongtuso <=$Mauso) {
            for ($i=$Tongtuso; $i >=1; $i--) { 
                if ($Tongtuso % $i ==0 && $Mauso % $i == 0) {
                    $Tongtuso = $Tongtuso /$i;
                    $Mauso = $Mauso/$i;
                    break;
                }
            }
        }
        else {
            for ($i=$Mauso; $i >=1; $i--) { 
                if ($Tongtuso % $i == 0 && $Mauso % $i == 0) {
                    $Tongtuso = $Tongtuso /$i;
                    $Mauso = $Mauso/$i;
                   break;
                }
            }
        }
        
        
        return "$tuso1/$mauso1 + $tuso2/$mauso2 = "."$Tongtuso/$Mauso";
    }
}


class Tru extends Pheptinh{
    public function ChucNang($tuso1,$mauso1,$tuso2,$mauso2){
        $Tongtuso = $tuso1*$mauso2 - $tuso2*$mauso1;
        $Mauso = $mauso1 * $mauso2;  
        return "$tuso1/$mauso1 - $tuso2/$mauso2 = "."$Tongtuso/$Mauso";
    }
}


class Nhan extends Pheptinh{
    public function ChucNang($tuso1,$mauso1,$tuso2,$mauso2){
        $Tongtuso = $tuso1 * $tuso2;
        $Mauso = $mauso1 * $mauso2;  
        return "$tuso1/$mauso1 + $tuso2/$mauso2 = "."$Tongtuso/$Mauso";
    }
}



class Chia extends Pheptinh{
    public function ChucNang($tuso1,$mauso1,$tuso2,$mauso2){
        $Tongtuso = $tuso1*$mauso2;
        $Mauso = $mauso1 * $tuso2;  
        return "$tuso1/$mauso1 + $tuso2/$mauso2 = "."$Tongtuso/$Mauso";
    }
}



$tuso1 = NULL;
$mauso1 = NULL;
$tuso2 = NULL;
$mauso2 = NULL;
if (isset($_POST['ketqua'])) {
    $tuso1 = $_POST['tuso1'];
    $mauso1 = $_POST['mauso1'];
    $tuso2 = $_POST['tuso2'];
    $mauso2 = $_POST['mauso2'];
    if (isset($_POST['TinhToan']) && ($_POST['TinhToan']) =='cong') {
        $kq = new Cong();
        $ketqua = $kq->ChucNang($tuso1,$mauso1,$tuso2,$mauso2);
    }
    if (isset($_POST['TinhToan']) && ($_POST['TinhToan']) =='tru') {
        $kq = new Tru();
        $ketqua = $kq->ChucNang($tuso1,$mauso1,$tuso2,$mauso2);
    }
    if (isset($_POST['TinhToan']) && ($_POST['TinhToan']) =='nhan') {
        $kq = new Nhan();
        $ketqua = $kq->ChucNang($tuso1,$mauso1,$tuso2,$mauso2);
    }
    if (isset($_POST['TinhToan']) && ($_POST['TinhToan']) =='chia') {
        $kq = new Chia();
        $ketqua = $kq->ChucNang($tuso1,$mauso1,$tuso2,$mauso2);
    }
}

?>







<form action="" method="post">
    <p style="color: blueviolet;">Chọn các phép tính trên phân số</p>
    <table>
        <tr>
            <td>Nhập phân số thứ 1:</td>
            <td>Tử số: <input type="text" name="tuso1" value="<?php echo $tuso1;?>" style="width: 50px;"></td>
            <td>Mẫu số: <input type="text" name="mauso1" value="<?php echo $mauso1;?>" style="width: 50px;"></td>
        </tr>

        <tr>
            <td>Nhập phân số thứ 2:</td>
            <td>Tử số: <input type="text" name="tuso2" value="<?php echo $tuso2;?>" style="width: 50px;"></td>
            <td>Mẫu số: <input type="text" name="mauso2" value="<?php echo $mauso2;?>" style="width: 50px;"></td>
        </tr>
        <tr>
            <th>Chọn phép tính</th>
        </tr>
        <tr>
            <td><input type="radio" name="TinhToan" value="cong" <?php if(isset($_POST['TinhToan'])&&($_POST['TinhToan'])=="cong") echo 'checked="checked"'?>>Cộng</td>
            <td><input type="radio" name="TinhToan" value="tru" <?php if(isset($_POST['TinhToan'])&&($_POST['TinhToan'])=="tru") echo 'checked="checked"'?>>Trừ</td>
            <td><input type="radio" name="TinhToan" value="nhan" <?php if(isset($_POST['TinhToan'])&&($_POST['TinhToan'])=="nhan") echo 'checked="checked"'?>>Nhân</td>
            <td><input type="radio" name="TinhToan" value="chia" <?php if(isset($_POST['TinhToan'])&&($_POST['TinhToan'])=="chia") echo 'checked="checked"'?>>Chia</td>
        </tr>
        <tr>
            <td><input type="submit" name="ketqua" value="Kết quả"></td>
        </tr>
    </table>
    <p>
        <?php
        if (isset($_POST['TinhToan']) && ($_POST['TinhToan'])=='cong') {
            echo "Phép cộng: ".$ketqua;
        } elseif (isset($_POST['TinhToan']) && ($_POST['TinhToan']) == 'tru') {
            echo "Phép trừ: ".$ketqua;
        } elseif (isset($_POST['TinhToan']) && ($_POST['TinhToan']) == 'nhan') {
            echo "Phép nhân: ".$ketqua;
        } elseif (isset($_POST['TinhToan']) && ($_POST['TinhToan']) == 'chia') {
            echo "Phép chia: ".$ketqua;
        }
        ?>
    </p>
</form>
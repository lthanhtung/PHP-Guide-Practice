<?php
class Person{
    protected $hoten, $Diachi, $Gioitinh;
    public function setHoten($hoten){
        $this->hoten=$hoten;
    }
    public function getHoten(){
        return $this->hoten;
    }
    public function setDiaChi($diachi){
        $this->Diachi=$diachi;
    }
    public function getDiaChi(){
        return $this->Diachi;
    }
    public function setGioitinh($Gioitinh){
        $this->Gioitinh=$Gioitinh;
    }
    public function getGioitinh(){
        return $this->Gioitinh;
    }
    public function __construct($hoten,$Diachi,$Gioitinh)
    {
        $this->hoten=$hoten;
        $this->Diachi=$Diachi;
        $this->Gioitinh=$Gioitinh;
    }
}

class SinhVien extends Person{
    public $LopHoc,$NganhHoc;
    public function SetLopHoc($LopHoc){
        $this->LopHoc=$LopHoc;
    }
    public function GetLopHoc(){
        return $this->LopHoc;
    }
    public function SetNganhHoc($NganhHoc){
        $this->NganhHoc=$NganhHoc;
    }
    public function GetNganhHoc(){
        return $this->NganhHoc;
    }
    public function __construct($hoten,$Diachi,$Gioitinh,$LopHoc,$NganhHoc)
    {
        Person::__construct($hoten,$Diachi,$Gioitinh);
        $this->LopHoc = $LopHoc;
        $this->NganhHoc = $NganhHoc;

    }
    public function TinhdiemThuong(){
        if ($this->NganhHoc == "CNTT") {
            return "Điểm thưởng: 1";
        }
        else if ($this->NganhHoc == "Kinh tế") {
            return "Điểm thưởng: 1.5";
        }
        else {
            return "điểm thưởng: 0";
        }
    }
}
class GiangVien extends Person{
    public $Trinhdo;
    private const LuongCoban = 1500000 ;//Hằng số
    public function setTrinhdo($Trinhdo){
        $this->Trinhdo=$Trinhdo;
    }
    public function getTrinhdo(){
        return $this->Trinhdo;
    }

    public function TinhLuong(){
        if ($this->Trinhdo == "Cử nhân") {
            $Luong = self::LuongCoban *2.34;
            return "Lương giảng viên:".$Luong;
        }
        elseif ($this->Trinhdo == "Thạc sĩ") {
            $Luong = self::LuongCoban *3.67;
            return "Lương giảng viên:".$Luong;
        }
        else{
            $Luong = self::LuongCoban * 5.66;
            return "Lương giảng viên:".$Luong;
        }
    }
}
$a = new SinhVien("Nguyễn Văn A","Nha Trang","Nam","62.CNTT-1","CNTT");
$b = new GiangVien("Trần Đình Quang","Phú Yên","Nữ");
echo $a->TinhdiemThuong()."<br>";
echo "------------------------------------------------------------------------------------"."<br>";
$b ->setTrinhdo("cử");
echo $b ->TinhLuong();
?>
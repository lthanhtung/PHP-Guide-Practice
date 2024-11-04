<?php // câu 1:
class Nhanvien{
    protected $hovaten , $gioiTinh , $ngayVaoLam ;
    protected $heSoluong,$soCon;
    public const luongCanBan = 120000000;
    public function sethovaten($hovaten){
        $this->hovaten = $hovaten;
    }
    public function gethovaten(){
        return $this->hovaten;
    }
    public function setGioiTinh($gioiTinh){
        $this->gioiTinh = $gioiTinh;
    }
    public function getGioiTinh(){
        return $this->gioiTinh;
    }

    public function setNgayvaoLam($ngayVaoLam){
        $this->ngayVaoLam = $ngayVaoLam;
    }
    public function getNgayvaoLam(){
        return $this->ngayVaoLam;
    }
    public function setheSoLuong($heSoluong){
        $this->heSoluong = $heSoluong;
    }
    public function gethesoLuong(){
        return $this->heSoluong;
    }
    public function setSocon($soCon){
        $this->soCon = $soCon;
    }
    public function getSocon(){
        return $this->soCon;
    }
    public function TinhTienLuong(){
    }
    public function TinhTroCap(){
    }
    public function TinhTienThuong(){
    }
}

class NhanVienVP extends Nhanvien{
    protected $NgayVang;
    protected const dinhMucvang = 4;
    protected const donGiaPhat = 100000;
    public function TinhTienPhat(){
        $this ->NgayVang = $_POST['ngayVang'];
        if ($this->NgayVang > self::dinhMucvang) {
            return  ($this->NgayVang - self::dinhMucvang) * self::donGiaPhat;
        }
    }
public function TinhTroCap()
{
    $this->gioiTinh  = $_POST['gioiTinh'];
    if ($this->gioiTinh == "Nữ") {
        return 200000 * $this->soCon* 1.5;
    }
    else{
        return 200000 * $this->soCon;
    }
}

public function TinhTienLuong()
{
    $heSoluong = $_POST['heSoluong'];
    return $heSoluong * Nhanvien::luongCanBan;

}
}
class NhanVienSanXuat extends Nhanvien{
    public $soSanPham;
    public const dinhmucsanpham = 10;
    public const dongiasanpham = 10000;

    public function TinhTienThuong()
    {
        if ($_POST['soSanPham'] > self::dinhmucsanpham) {
            return ($_POST['soSanPham'] - self::dinhmucsanpham) * self::dongiasanpham;
        }
    }
    public function TinhTroCap()
    {
        return $this->soCon* 120000;
    }
    public function TinhTienLuong()
    {
        $soSanPham = $_POST['soSanPham'];
        return $soSanPham * self::dongiasanpham;
    }

}
$troCap = NULL;
$tienPhat = null;
$tienluong = NULL;
$tienThuong = NULL;
$tienLanh = NULL;

if (isset($_POST['tinhLuong'])) {
if (isset($_POST['loaiNV']) && ($_POST['loaiNV']) == "VanPhong"){
    $NhanVienVP = new NhanVienVP();
    $NhanVienVP ->sethovaten($_POST['hovaten']);
    $NhanVienVP ->setNgayvaoLam($_POST['ngayVao']);
    $NhanVienVP ->setheSoLuong($_POST['heSoluong']);
    $NhanVienVP ->setSocon($_POST['soCon']);
    $NhanVienVP ->setGioiTinh($_POST['gioiTinh']);
    $troCap = $NhanVienVP->TinhTroCap();
    $tienluong = $NhanVienVP ->TinhTienLuong();
    $tienPhat = $NhanVienVP ->TinhTienPhat();
    $tienLanh = $tienluong + $tienLanh + $troCap - $tienPhat;
}
if (isset($_POST['loaiNV']) && ($_POST['loaiNV']) == "SanXuat"){
    $NhanVienSanXuat = new NhanVienSanXuat();
    $NhanVienSanXuat ->sethovaten($_POST['hovaten']);
    $NhanVienSanXuat ->setNgayvaoLam($_POST['ngayVao']);
    $NhanVienSanXuat ->setheSoLuong($_POST['heSoluong']);
    $NhanVienSanXuat ->setSocon($_POST['soCon']);
    $NhanVienSanXuat ->setGioiTinh($_POST['gioiTinh']);
    $troCap = $NhanVienSanXuat->TinhTroCap();
    $tienluong = $NhanVienSanXuat ->TinhTienLuong();
    $tienPhat = 0;
    $tienThuong = $NhanVienSanXuat->TinhTienThuong();
    $tienLanh = $tienluong + $tienLanh + $troCap - $tienPhat;
}

}

?>



<form action="" method="post">
    <table class="table" border = "1" style="margin: auto;">
        <thead>
            <tr>
                <th colspan="4" style = "text-align: center">QUẢN LÝ NHÂN VIÊN</th>
            </tr>
        </thead>
        <tbody style="background-color: yellow;" s>
            <tr >
                <td>Họ và tên</td>
                <td><input type="text" name="hovaten" value="<?php if (isset($_POST['hovaten'])){ echo $_POST['hovaten'];}?>"></td>
                <td>Số con:</td>
                <td><input type="text" name="soCon" value="<?php if (isset($_POST['soCon'])){ echo $_POST['soCon'];}?>"></td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td><input type="date" name="ngaysinh"></td>
                <td>Ngày vào làm:</td>  
                <td><input type="date" name="ngayVao" value="<?php if (isset($_POST['ngayVao'])){ echo $_POST['ngayVao'];}?>"></td>      
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <input type="radio" name="gioiTinh" value="Nam" >Nam
                    <input type="radio" name="gioiTinh" value="Nữ">Nữ 
                </td>
                <td>Hệ số lương:</td>
                <td><input type="text" name="heSoluong" value="2.0"></td>             
            </tr>
            <tr>
                <td>Loại nhân viên</td>
                <td><input type="radio" name="loaiNV" value="VanPhong">Văn phòng</td>
                <td colspan="2"><input type="radio" name="loaiNV" value="SanXuat">Sản xuất</td>             
            </tr>
            <tr>
                <td></td>
                <td>Số ngày vắng: <input type="text" name="ngayVang" value="3"></td>
                <td>Số sản phẩm:</td>
                <td><input type="text" name="soSanPham"></td>             
            </tr>
        </tbody>
        <tr>
                <td colspan="4" style="text-align: center;"><input type="submit" name="tinhLuong" value="Tính lương"></td>
        </tr>
        <tbody  style="background-color: yellow;">
        <tr >
                <td>Tiền lương:</td>
                <td style="text-align: center;"><input type="text" name="tienluong" value="<?php if (isset($_POST['tienluong'])){echo $tienluong;} ?>"></td>
                <td>Trợ cấp:</td>
                <td><input type="text" name="troCap" value="<?php if (isset($_POST['troCap'])) {echo $troCap;}?>"></td>
            </tr>
            <tr>
                <td>Tiền thưởng</td>
                <td style="text-align: center;"><input type="text" name="tienThuong" value="<?php if (isset($_POST['tienThuong'])) {echo $tienThuong;} ?>"></td></td>
                <td>Tiền phạt:</td>  
                <td><input type="text" name="tienPhat" value="<?php if (isset($_POST['tienPhat'])) {echo $tienPhat;} ?>"></td>           
            </tr>
            <tr>
                <td colspan="4" style="text-align: center;">Thực lĩnh:
                    <input type="text" name="tienLanh" value="<?php if (isset($_POST['tienLanh'])){echo $tienLanh;}?>">
                </td>
            </tr>
        </tbody>
    </table>
</form>
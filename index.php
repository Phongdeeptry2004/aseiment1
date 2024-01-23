<?php
require "./env.php";
require "./config.php";
require_once __DIR__ . "/vendor/autoload.php";


use App\Models\TruyenModel;
use App\Models\ChuongModel;

// ProductModel::delete(3);
/*
CREATE TABLE Truyen (
    MaTruyen INT PRIMARY KEY AUTO_INCREMENT,
    TieuDe VARCHAR(255) NOT NULL,
    MaTacGia INT,
    MoTa TEXT,
    LuotXem int,
    LuotThich INT, 
    DanhGia int,
    ThoiDiemTao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (MaTacGia) REFERENCES NguoiDung(MaNguoiDung),
    FOREIGN KEY (MaDanhMuc) REFERENCES DanhMucTruyen(MaDanhMuc)
);
dựa vào database trên thêm dữ liệu vào data
*/
// print_r($product->all());
$Truyen = new TruyenModel();
$allchuong = new ChuongModel();

if (isset($_GET['action'])) {
    $act = $_GET["action"];
} else $act = "";
switch ($act) {
    case "":
        include "app/view/headder.php";
        // include "app/view/noibat_thaoluan_lichsu.php";
        include "app/view/list.php";
        break;
    case "GTtruyen":
        //kiểm tra xem matruyen có tồn tại không và gắn giá trị mã truyện cho biến idtruyen
        if (isset($_GET['matruyen'])) {
            $idtruyen = $_GET['matruyen'];
            $oneTruyen=(array)$Truyen->find('MaTruyen',$idtruyen);
            $chuong=$allchuong->find('MaTruyen',$idtruyen);
        } else {
            echo "<script>window.location='index.php'</script>";
        }
        include "app/view/header_nobanner.php";
        include "app/view/gioithieutruyen.php";
        break;
    case "Doctruyen":
        if(isset($_GET['chuong'],$_GET['matruyen'])){
            $idtruyen = $_GET['matruyen'];
            include "app/view/header_nobanner.php";
            $chuong= $allchuong->find('MaTruyen',$idtruyen);
            include "app/view/chuongtruyen.php";
            }
    default:
    include "app/view/header_nobanner.php";
    
}
include "app/view/footer.php";

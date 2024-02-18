<?php 

namespace App\Models;
use PDO;
class LichSuModel extends BaseModel{
    protected $tableName = "lichsudoctruyen";
    protected $primaryKey = 'MaLichSu';
    public static function getAll($MaNguoiDung){
        $model= new static;
        $model->sqlBuilder="SELECT lsd.*, t.TieuDe, t.img,c.TieuDeChuong
        FROM lichsudoctruyen lsd
        JOIN chuongtruyen c ON lsd.ChapDocGanNhat = c.MaChuong
        JOIN truyen t ON c.MaTruyen = t.MaTruyen where MaNguoiDung=:MaNguoiDung limit 4";
        ;
        $stmt=$model->conn->prepare( $model->sqlBuilder);
        $stmt->execute(['MaNguoiDung'=>$MaNguoiDung]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function AllTruyen(){
        $model= new static;
        $model->sqlBuilder="SELECT c.MaTruyen, c.MaChuong, c.TieuDeChuong,t.TieuDe, t.img
        FROM chuongtruyen c
        JOIN truyen t ON c.MaTruyen = t.MaTruyen limit 4;
        ";
        ;
        $stmt=$model->conn->prepare( $model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

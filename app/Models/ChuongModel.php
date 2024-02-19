<?php 

namespace App\Models;
use PDO;
class ChuongModel extends BaseModel{
    protected $tableName = "chuongtruyen";
    public static function getChuong($column, $id)
{
    $model = new static; // Khởi tạo đối tượng model
    $model->sqlBuilder = "SELECT chuong.*, truyen.TieuDe as TenTruyen FROM $model->tableName chuong 
                         JOIN truyen ON chuong.MaTruyen = truyen.MaTruyen 
                         WHERE chuong.$column = :id";

    // Chuẩn bị truy vấn
    $stmt = $model->conn->prepare($model->sqlBuilder);

    // Thực thi truy vấn
    $stmt->execute(['id' => $id]);

    // Lấy dữ liệu
    $result = $stmt->fetchAll(PDO::FETCH_CLASS);

    // Kiểm tra số lượng phần tử trong $result
    $count = count($result);
    if ($count == 1) {
        return $result[0];
    } elseif ($count > 1) {
        return $result;
    }
}

}

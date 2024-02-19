<?php

namespace App\Models;

use PDO;

class BaseModel
{
    protected $conn;
    protected $sqlBuilder;
    protected $tableName;
    protected $tableName2;
    protected $primaryKey = 'id';
    public function __construct()
    {
        $host = HOSTNAME;
        $dbname = DBNAME;
        $username = USERNAME;
        $password = PASSWORD;
        try {
            $this->conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8;", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Lỗi kết nối: " . $e->getMessage();
        }
    }

    // phhuong thuc lay ra toan bo du lieu

    public static function all()
    {
        $model = new static; //khoi tao static
        $model->sqlBuilder = "SELECT * FROM $model->tableName";
        //chuan bi
        $stmt = $model->conn->prepare($model->sqlBuilder);
        //thuc thi
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public static function getChapterBeforeAndAfter($MaTruyen)
    {
        $model = new static; //khoi tao static
        $model->sqlBuilder = "SELECT `MaChuong`,`SoChuong` FROM $model->tableName where MaTruyen=:MaTruyen ORDER BY `SoChuong` ASC";
        //chuan bi
        $stmt = $model->conn->prepare($model->sqlBuilder);
        //thuc thi
        $stmt->execute(['MaTruyen'=>$MaTruyen]);
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    // phuong thuc find: dung tim du lieu theo id

    public static function find($column, $id)
    {
        $model = new static; //khoi tao static
        $model->sqlBuilder = "SELECT * FROM $model->tableName where $column=:id";
        //chuan bi
        $stmt = $model->conn->prepare($model->sqlBuilder);
        //thuc thi
        $stmt->execute(['id' => $id]);
        //lay du lieu
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        // Kiểm tra số lượng phần tử trong $result
        $count = count($result);
        if ($count == 1) {
            return $result[0];
        } elseif ($count > 1) {
            return $result;
        }
    }
    //phương thức có điều kiện
    //$ colum là tên cột 
    //$value là giá trị muốn tìm
    // Codition là điều kiện (<,>,=...)
    public static function where($column, $condition, $value)
    {
        $model = new static;
        $model->sqlBuilder .= "SELECT * FROM $model->tableName  WHERE `$column` $condition '$value'";
        return $model;
    }

    public function andWhere($column, $condition, $value)
    {
        $this->sqlBuilder .= " AND `$column` $condition '$value'";
        return $this;
    }
    public function andOderbyDESClimit($column,$Limit)
    {
        $this->sqlBuilder .= " ORDER BY `$column` DESC LIMIT $Limit";
        return $this;
    }
    public function andOderbyASClimit($column,$Limit)
    {
        $this->sqlBuilder .= " ORDER BY `$column` ASC LIMIT $Limit";
        return $this;
    }
    public function andOderbyDESC($column)
    {
        $this->sqlBuilder .= " ORDER BY `$column` DESC";
        return $this;
    }
    public function andOderbyASC($column)
    {
        $this->sqlBuilder .= " ORDER BY `$column` ASC ";
        return $this;
    }
    public function orWhere($column, $condition, $value)
    {
        $this->sqlBuilder .= " OR `$column` $condition '$value'";
        return $this;
    }

    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    //xoá dữ liệu 
    public static function delete($column, $id)
    {
        $model = new static;
        $model->sqlBuilder = "DELETE FROM $model->tableName Where `$column`=:id";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute(['id' => $id]);
    }
    //thêm dữ liệu
    public function add($data)
    {
        $this->sqlBuilder = "INSERT INTO $this->tableName(";
        $values = " VALUES( ";
        //lặp để lấy key của data
        foreach ($data as $key => $value) {
            $this->sqlBuilder .= '`' . $key . '`, ';
            $values .= " :$key, ";
        }
        //xoá đi đấu ", " ở bên phải chuỗi
        $this->sqlBuilder = rtrim($this->sqlBuilder, ', ') . ')';
        $values = rtrim($values, ', ') . ');';
        $this->sqlBuilder .= $values;
        $stmt = $this->conn->prepare($this->sqlBuilder);
        if ($stmt->execute($data))
            return $this->conn->lastInsertId();
        else {
            echo "<pre>";
            var_dump($stmt->errorInfo());
            die();
        }
    }
    public static function demchu($idtruyen){
        $model = new static;
        $model->sqlBuilder = "SELECT SUM(LENGTH(NoiDungChuong) - LENGTH(REPLACE(NoiDungChuong, ' ', '')) + 1) AS TongSoTu
        FROM `chuongtruyen` WHERE MaTruyen=:idtruyen";
        //chuan bi
        $stmt = $model->conn->prepare($model->sqlBuilder);
        //thuc thi
        $stmt->execute(['idtruyen'=>$idtruyen]);
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public static function demTruyen($MaNguoiDang){
        $model = new static;
        $model->sqlBuilder = "SELECT *,COUNT(`MaTruyen`) AS SoTruyen
        FROM `truyen` WHERE MaNguoiDang=:MaNguoiDang";
        //chuan bi
        $stmt = $model->conn->prepare($model->sqlBuilder);
        //thuc thi
        $stmt->execute(['MaNguoiDang'=>$MaNguoiDang]);
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    /*
    Method  update : dungf ddeer caapj nhaatj duwx lieeuj 
    $id : Giá trị của khoá chính 
    $data : Mảng dữ liệu cần nhập , phải đưuocj thiết kế có ket và value
    */
    public function update($id, $data)
    {
        $this->sqlBuilder = "UPDATE $this->tableName SET ";
        foreach ($data as $key=>$value){
            $this->sqlBuilder .= "`$key`=:$key, ";
        }
        // xoa loai bo dau ", "
        $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
        // noi lenh dieu kien
        $this->sqlBuilder .= " Where `$this->primaryKey`=:$this->primaryKey";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        //dua id vao mang data
        $data[$this->primaryKey]=$id;
        $stmt->execute($data);
        return  $stmt->execute($data);

    }
    public function allWithJoin()
    {
        $model = new static; // Khởi tạo static
        $model->sqlBuilder = "SELECT $model->tableName2.TieuDe,$model->tableName.MaDanhMuc, $model->tableName.TenDanhMuc FROM $model->tableName 
        INNER JOIN $model->tableName2 ON $model->tableName2.MaTruyen =$model->tableName.MaTruyen "; // Truy vấn kết hợp
        // Chuẩn bị
        $stmt = $model->conn->prepare($model->sqlBuilder);
        // Thực thi
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }    public function allWithJoinid($id)
    {
        $model = new static; // Khởi tạo static
        $model->sqlBuilder = "SELECT $model->tableName2.TieuDe,$model->tableName.MaDanhMuc, $model->tableName.TenDanhMuc FROM $model->tableName 
        INNER JOIN $model->tableName2 ON $model->tableName2.MaTruyen =$model->tableName.MaTruyen Where `$this->primaryKey`=$id"; // Truy vấn kết hợp
        // Chuẩn bị
        $stmt = $model->conn->prepare($model->sqlBuilder);
        // Thực thi
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}

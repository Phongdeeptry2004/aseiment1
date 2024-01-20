<?php
namespace App\Models;

use PDO;

class BaseModel{
    protected $conn;
    protected $sqlBuilder;
    protected $tableName;
    public function __construct()
    {
        $host = HOSTNAME;
        $dbname = DBNAME;
        $username = USERNAME;
        $password = PASSWORD;
        try{
            $this->conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8;",$username,$password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch (\PDOException $e){
            echo "Lỗi kết nối: ".$e->getMessage();
        }
    }

    // phhuong thuc lay ra toan bo du lieu

    public static function all(){
        $model = new static;//khoi tao static
        $model->sqlBuilder = "SELECT * FROM $model->tableName";
        //chuan bi
        $stmt = $model->conn->prepare($model->sqlBuilder);
        //thuc thi
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    // phuong thuc find: dung tim du lieu theo id

    public static function find($id){
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName where MaTruyen=:id";
        //chuan bi
        $stmt = $model->conn->prepare($model->sqlBuilder);
        //thuc thi
        $stmt->execute(['id'=>$id]);
        //lay du lieu
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if($result){
            return $result[0]; // lam gon lai
        }
        return $result;
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
    public static function delete($id){
        $model = new static;
        $model->sqlBuilder="DELETE FROM $model->tableName Where MaTruyen=:id";
        $stmt=$model->conn->prepare($model->sqlBuilder);
        $stmt->execute(['id'=>$id]);
    }
    //thêm dữ liệu
    public function add($data){
        $this->sqlBuilder= "INSERT INTO $this->tableName(";
        $values=" VALUES( ";
        //lặp để lấy key của data
        foreach ($data as $key => $value) {
            $this->sqlBuilder.='`'.$key.'`, ';
            $values.=" :$key, ";
            }
            //xoá đi đấu ", " ở bên phải chuỗi
            $this->sqlBuilder=rtrim($this->sqlBuilder, ', ').')';
            $values=rtrim($values, ', ').');';
            $this->sqlBuilder .=$values;
            $stmt=$this->conn->prepare($this->sqlBuilder);
            if($stmt->execute($data))
            return $this->conn->lastInsertId();
        else{
            echo "<pre>";
            var_dump($stmt->errorInfo());
            die();
            }
    }
}
<?php
require "./env.php";
require "./config.php";
require_once __DIR__. "/vendor/autoload.php";


use App\Models\ProductModel;

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
$data=[
    'TieuDe'=>'The Last of us',
    'MaTacGia'=>1,
    'MoTa'=>"In the year 2047, humanity has colon
    established a new world on Mars. The United Nations Space Agency is in charge of governing this
    planet and its resources. But when a group of rebels discovers that they are not alone
    on Mars, they begin to question everything.",
    'LuotXem'=>100,
    'LuotThich'=>56,
    'DanhGia'=>9.8
    ]; 
$product->add($data);

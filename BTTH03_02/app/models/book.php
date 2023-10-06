<?php

class book{
    private $id,$tenSach, $namXuatBan, $idTacGia;

    public function __construct($id, $tenSach, $namXuatBan, $idTacGia)
    {
        $this->id = $id;
        $this->tenSach= $tenSach;
        $this->namXuatBan = $namXuatBan;
        $this->idTacGia = $idTacGia;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTenSach()
    {
        return $this->tenSach;
    }

    public function setTenSach($tenSach)
    {
        $this->tenSach = $tenSach;
    }

    public function getNamXuatBan()
    {
        return $this->namXuatBan;
    }

    public function setNamXuatBan($namXuatBan)
    {
        $this->namXuatBan = $namXuatBan;
    }

    public function getIdTacGia()
    {
        return $this->idTacGia;
    }

    public function setIdTacGia($idTacGia)
    {
        $this->idTacGia = $idTacGia;
    }

}
<?php

class author{
    private $id,$tenTacGia;

    public function __construct($id, $tenTacGia)
    {
        $this->id = $id;
        $this->tenTacGia = $tenTacGia;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTenTacGia()
    {
        return $this->tenTacGia;
    }

    public function setTenTacGia($tenTacGia)
    {
        $this->tenTacGia = $tenTacGia;
    }
}
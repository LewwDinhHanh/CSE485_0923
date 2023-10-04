<?php

class baihat{
    private $id,$tenbaihat,$casi,$idtheloai;

    public function __construct($id, $tenbaihat, $casi, $idtheloai)
    {
        $this->id = $id;
        $this->tenbaihat = $tenbaihat;
        $this->casi = $casi;
        $this->idtheloai = $idtheloai;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTenbaihat()
    {
        return $this->tenbaihat;
    }

    public function setTenbaihat($tenbaihat)
    {
        $this->tenbaihat = $tenbaihat;
    }

    public function getcasi()
    {
        return $this->casi;
    }

    public function setcasi($casi)
    {
        $this->casi = $casi;
    }

    public function getidtheloai()
    {
        return $this->idtheloai;
    }

    public function setidtheloai($idtheloai)
    {
        $this->idtheloai = $idtheloai;
    }


}
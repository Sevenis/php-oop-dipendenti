<?php
trait GetIdCode{
    public $idCode;

    public $randNumber;


    public function getIdCode(){
        $random = rand(1000, 7000);
        $this->randNumber = $random;
        $this->idCode = $random + NOW('y');
        return $this->$idCode;
    }

}

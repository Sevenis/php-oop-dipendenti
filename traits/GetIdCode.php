<?php
trait GetIdCode{
    public $idCode;

    public $randNumber;


    public function getIdCode(){
        $random = rand(1000, 7000);
        $randNumber = $random . date("Y");
        $this->idCode = $randNumber;
        return $this->idCode;
    }

}

<?php
require_once 'Dipendente.php';

class Manager extends Dipendente{
    private $benefits = [];

    public function __construct($_nomeDipendente,$_cognomeDipendente, $_livelloDipendente, $_repartoDipendente, $_benefits){
        parent::__construct($_nomeDipendente, $_cognomeDipendente, $_livelloDipendente, $_repartoDipendente);
        $this->benefits = $_benefits;
    }

    public function setBenefits($_benefits = ['a','b','c','d','e']){
        $this->benefits = $_benefits;
    }

    public function getBenefits(){
        if(empty($this->benefits)){
            throw new Exception("Il manager non ha benefici aggiuntivi");
        } else {
            foreach ($this->benefits as $benefit){
                echo $benefit . ' ';
            }
        }
    }

}

<?php
require_once 'Dipendente.php';

class Manager extends Dipendente{
    private $benefits = [];

    public function __construct($_idDipendente,$_nomeDipendente,$_cognomeDipendente, $_livelloDipendente, $_repartoDipendente, $_benefits){
        parent::__construct($_idDipendente, $_nomeDipendente, $_cognomeDipendente, $_livelloDipendente, $_repartoDipendente);
        $this->benefits = $_benefits;
    }

    public function setBenefits($_benefits = ['a','b','c','d','e']){
        $this->benefits = $_benefits;
    }

    public function getBenefits(){
        if(empty($this->benefits)){
            die('Il manager non ha benefit aggiuntivi');
        }
        foreach ($this->benefits as $benefit){
            echo $benefit . ' ';
        }
    }

}
 ?>

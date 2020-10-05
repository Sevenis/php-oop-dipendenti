<?php
class Dipendente {
    protected $idDipendente;
    protected $nomeDipendente;
    protected $cognomeDipendente;
    protected $livelloDipendente;
    protected $repartoDipendente;

    public function __construct($_idDipendente, $_nomeDipendente, $_cognomeDipendente, $_livelloDipendente, $_repartoDipendente){
        //idDipendente passato tramite trait
        $this->nomeDipendente = $_nomeDipendente;
        $this->cognomeDipendente = $_cognomeDipendente;
        $this->livelloDipendente = $_livelloDipendente;
        $this->repartoDipendente = $_repartoDipendente;
    }

    public function getNomeDipendente(){
        if(empty($this->nomeDipendente)){
            die('Nome dipendente non presente!');
        }
        return $this->nomeDipendente;
    }

    public function setNomeDipendente($_nomeDipendente){
        $this->nomeDipendente = $_nomeDipendente;
    }

    public function getCognomeDipendente(){
        if(empty($this->cognomeDipendente)){
            die('Cognome del dipendente non presente!');
        }
        return $this->cognomeDipendente;
    }

    public function setCognomeDipendente($_cognomeDipendente){
        $this->cognomeDipendente = $_cognomeDipendente;
    }

    public function getLivelloDipendente(){
        if(empty($this->livelloDipendente)){
            die('Livello non presente');
        }
        return $this->livelloDipendente;
    }

    public function setLivelloDipendente($_livelloDipendente){
        $this->livelloDipendente = $_livelloDipendente;
    }

    public function getRepartoDipendente(){
        if(empty($this->repartoDipendente)){
            die('Reparto non presente!');
        }
        return $this->repartoDipedente;
    }

    public function setRepartoDipendente($_repartoDipendente){
        $this->repartoDipendente = $_repartoDipedente;
    }

}

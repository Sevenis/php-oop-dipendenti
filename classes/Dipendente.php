<?php
require_once __DIR__ . '/../traits/GetIdCode.php';

class Dipendente {
    use GetIdCode;
    protected $idDipendente;
    protected $nomeDipendente;
    protected $cognomeDipendente;
    protected $livelloDipendente;
    protected $repartoDipendente;

    public function __construct($_nomeDipendente, $_cognomeDipendente, $_livelloDipendente, $_repartoDipendente){
        $this->idDipendente = $this->getIdCode();

        if(is_string($_nomeDipendente)){
            $this->nomeDipendente = $_nomeDipendente;
        } else {
            throw new Exception("Nome del dipendente non corretto!");
        }

        if(is_string($_cognomeDipendente)){
            $this->cognomeDipendente = $_cognomeDipendente;
        } else {
            throw new Exception("Cognome del dipendente non corretto!");
        }

        if(is_int($_livelloDipendente)){
            $this->livelloDipendente = $_livelloDipendente;
        } else {
            throw new Exception("Livello dipendente non corretto!");
        }

        if(($_repartoDipendente == "Amministrazione") OR ($_repartoDipendente == "Booking") OR ($_repartoDipendente == "Direzione")){
            $this->repartoDipendente = $_repartoDipendente;
        } else {
            throw new Exception("Reparto non corretto!");
        }
    }

    public function getIdDipendente(){
        if(empty($this->idDipendente)){
            throw new Exception("ID dipendente non presente!");
        } else {
            return $this->idDipendente;
        }
    }

    public function getNomeDipendente(){
        if(empty($this->nomeDipendente)){
            throw new Exception("Nome dipendente non presente!");
        } else {
            return $this->nomeDipendente;
        }
    }

    public function setNomeDipendente($_nomeDipendente){
        $this->nomeDipendente = $_nomeDipendente;
    }

    public function getCognomeDipendente(){
        if(empty($this->cognomeDipendente)){
            throw new Exception("Cognome dipendente non presente!");
        } else {
            return $this->cognomeDipendente;
        }
    }

    public function setCognomeDipendente($_cognomeDipendente){
        $this->cognomeDipendente = $_cognomeDipendente;
    }

    public function getLivelloDipendente(){
        if(empty($this->livelloDipendente)){
            throw new Exception("Livello dipendente non presente!");
        } else {
            return $this->livelloDipendente;
        }
    }

    public function setLivelloDipendente($_livelloDipendente){
        $this->livelloDipendente = $_livelloDipendente;
    }

    public function getRepartoDipendente(){
        if(empty($this->repartoDipendente)){
            throw new Exception("Reparto non presente!");
        } else {
            return $this->repartoDipedente;
        }
    }

    public function setRepartoDipendente($_repartoDipendente){
        $this->repartoDipendente = $_repartoDipedente;
    }

}

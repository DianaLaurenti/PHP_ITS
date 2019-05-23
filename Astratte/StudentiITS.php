<?php

abstract class StudentiITS{
    protected $nome;
    protected $cognome;
    protected $dataNascita;
    protected $ITS;
    protected $oreAssenza;

    public function __construct($nome, $cognome, $dataNascita, $oreAssenza){
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->dataNascita=$dataNascita;
        $this->oreAssenza=$oreAssenza;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function getDataNascita(){
        return $this->dataNascita;
    }
    public function getITS(){
        return $this->ITS;
    }
    public function getOreAssenza(){
        return $this->oreAssenza;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setCognome($cognome){
        $this->cognome=$cognome;
    }
    public function setDataNascita($dataNascita){
        $this->dataNascita=$dataNascita;
    }
    public function setITS($ITS){
        $this->ITS=$ITS;
    }
    public function setOreAssenza($oreAssenza){
        $this->oreAssenza=$oreAssenza;
    }

    protected function Email() : string{}
}
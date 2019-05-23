<?php

require 'StudentiITS.php';

class ICT extends StudentiITS{
    const CORSIORE = [
        "PHP Programming"=>120, 
        "Cloud Serviced"=>70, 
        ".NET Framework"=>85, 
        "Java Programming"=>70
    ];
    const MAXASSENZA = 20;

    public function __construct($nome, $cognome, $dataNascita, $oreAssenza){
        $this->ITS="ICT";
        parent :: __construct($nome, $cognome, $dataNascita, $oreAssenza);
    }
    
    public function Email() : string{
        $nome = strtolower($this->nome);
        $cognome = strtolower($this->cognome);
        $this->SingoloNome($nome);
        $this->SingoloNome($cognome);
        return "$nome.$cognome@edu.itspiemonte.it";
    }

    private function SingoloNome($nome):string{
        if(strpos($nome, " ")!==0){
            $nomeSingolo=substr_replace($nome, "", strpos($nome, " "));
        }
            return $nomeSingolo;
    }

    public function PercentualeAssenza() : float{
        if($this->oreAssenza===0)
            return 0;
            
        $oreTotali=0;
        foreach(self::CORSIORE as $corso=>$ore)
            $oreTotali+=$ore;

        return $this->oreAssenza*100/$oreTotali;
    }

    public function OverMaxAssenza() : bool{
        if($this->PercentualeAssenza()>self::MAXASSENZA){
            echo "$this->nome $this->cognome ha superato la soglia massima di assenze consentite.";
            return true;
        }
        else if($this->PercentualeAssenza()===self::MAXASSENZA){
            echo "Per lo studente $this->nome $this->cognome non è più possibile assentarsi da lezione.";
            return false;
        }
        else{
            echo "$this->nome $this->cognome non ha superato il numero massimo di assenze.";
            return false;
        }
    }
}
        
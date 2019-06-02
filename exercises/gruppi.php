<?php
$studenti = ["Bert","Buscema","Carbonati","Cella","D'Augelli","Dumitru","Faoro","Ferrero","Fornaro","Gomes","Gregoricchio", 
    "Iacobelli","Laurenti","Linari","Lo Presti","Mason","Morales","Pietrapertosa","Presutti","Reale","Revelli", 
    "Sacchet","Sartori","Shutt","Sinatra","Soncin","Vellano","Velocci"];
print_r(gruppi($studenti));

function gruppi(array $lista):array{
    shuffle($lista);
    $i=1;
    while((count($lista)>0)){
        (count($lista)>5 || count($lista)==3) ? $num=3 : $num=2;
        $singoloGruppo=array_slice($lista, 0, $num);
        $lista=array_diff($lista,$singoloGruppo);
        $gruppi[]=["Gruppo ".$i => $singoloGruppo];
        $i++;
    }
    return $gruppi;    
}
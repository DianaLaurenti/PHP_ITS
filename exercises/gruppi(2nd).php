<?php
$studenti = ["Bert","Buscema","Carbonati","Cella","D'Augelli","Dumitru","Faoro","Ferrero","Fornaro","Gomes","Gregoricchio", 
    "Iacobelli","Laurenti","Linari","Lo Presti","Mason","Morales","Pietrapertosa","Presutti","Reale","Revelli", 
    "Sacchet","Sartori","Shutt","Sinatra","Soncin", "Vellano", "Velocci"];
print_r(gruppi($studenti));

function gruppi(array $lista):array{
    shuffle($lista);
    $i=0;
    while(count($lista)%3==0 ? $i<count($lista)/3 : $i<=count($lista)/3){
        $index = $num*$i;
        (count($lista)-$index==4) ? $num=2 : $num=3;
        $singoloGruppo=array_slice($lista, $index, $num);
        $gruppi[]=["Gruppo ".(++$i) => $singoloGruppo];
        if($num==2){
            $singoloGruppo=array_slice($lista, $index+2, $num);
            $gruppi[]=["Gruppo ".(++$i) => $singoloGruppo];}
    }
    return $gruppi;    
}
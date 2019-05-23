<?php

require 'ICT.php';

$s1 = new ICT("Diana", "Laurenti", "10/04/1996", 8);
echo $s1->Email()."\n";
echo $s1->PercentualeAssenza()."\n";
echo $s1->OverMaxAssenza();
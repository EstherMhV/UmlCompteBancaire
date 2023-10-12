<?php

$compte1 = new CompteBancaire('Duchmol', 800);
$compte1->depot(300);
$compte1->retrait(200);
$compte1->affiche();
?>
<?php
print "Digite o sexo do cliente (M / F): ";
$sexo = trim(fgets(STDIN));

print "Quantidade de cervejas consumidas: ";
$cerva = trim(fgets(STDIN));

print "Quantidade de refrigerantes consumidos: ";
$refri = trim(fgets(STDIN));

print "Quantidade de espetinhos consumidos: ";
$esp = trim(fgets(STDIN));

$cons = (($cerva * 2.5) + ($refri * 2) + ($esp * 4));

if ($sexo == "m" || $sexo == "M" ) {
	$ent = 10;	

} else
	$ent = 8;

if ($cons <= 15) {
	$couv = 3;

} else 
	$couv = 0;

$sub = $cons + $ent + $couv;
$t =  $sub * 0.1 + $sub;

print "\nValor da conta:";
print "\nR$ $ent (Entrada)";
print "\nR$ $cons (Consumaчуo)";
print "\nR$ $couv (Couvert)";
print "\nR$ $sub (Subtotal sem 10%)";
print "\n------------------------------";
print "\nR$ $t (TOTAL)";
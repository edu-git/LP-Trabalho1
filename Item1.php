<?php
print "Digite o sexo do cliente (M / F): ";
$sexo = trim(fgets(STDIN));
print "Quantidade de cervejas consumidas: ";
$cerva = trim(fgets(STDIN));
print "Quantidade de refrigerantes consumidos: ";
$refri = trim(fgets(STDIN));
print "Quantidade de espetos consumidos: ";
$esp = trim(fgets(STDIN));

$cons = (($cerva * 2.5) + ($refri * 2) + ($esp * 4));

if (($sexo == "m" || $sexo == "M" ) && ($cons <=15)) {
	$sub = $cons + 10 + 3;
	$t =  $sub * 0.1 + $sub;
	print "\nValor da conta:";
	print "\nR$ 10 (Entrada)";
	print "\nR$ $cons (Consumação)";
	print "\nR$ 03 (Couvert)";
	print "\nR$ $sub (Subtotal sem 10%)";
	print "\n--------------------------------";
	print "\nR$ $t (TOTAL)";
	
} else if (($sexo == "m" || $sexo == "M") && ($cons > 15)) {
	$sub = $cons + 10;
	$t =  $sub * 0.1 + $sub;
	print "\nValor da conta:";
	print "\nR$ 10 (Entrada)";
	print "\nR$ $cons (Consumação)";
	print "\nR$ 00 (Couvert)";
	print "\nR$ $sub (Subtotal sem 10%)";
	print "\n--------------------------------";
	print "\nR$ $t (TOTAL)";

}else if (($sexo == "f" || $sexo == "F") && ($cons <= 15)) {
	$sub = $cons + 8 + 3;
	$t = $sub * 0.1 + $sub;
	print "\nValor da conta:";
	print "\nR$ 08 (Entrada)";
	print "\nR$ $cons (Consumação)";
	print "\nR$ 03 (Couvert)";
	print "\nR$ $sub (Subtotal sem 10%)";
	print "\n--------------------------------";
	print "\nR$ $t (TOTAL)";
	
} else if (($sexo == "f" || $sexo == "F") && ($cons > 15)){
	$sub = $cons + 8;
	$t = $sub * 0.1 + $sub;
	print "\nValor da conta:";
	print "\nR$ 08 (Entrada)";
	print "\nR$ $cons (Consumação)";
	print "\nR$ 00 (Couvert)";
	print "\nR$ $sub (Subtotal sem 10%)";
	print "\n--------------------------------";
	print "\nR$ $t (TOTAL)";
}	
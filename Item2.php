<?php
print "Total de rendimentos banc�rios: ";
$rendbanco = trim(fgets(STDIN));

print "Total de rendimentos de sal�rios ou servi�os: ";
$rendsalario = trim(fgets(STDIN));

print "Total de outros rendimentos: ";
$rendoutros = trim(fgets(STDIN));

print "Servi�os m�dicos pagos: ";
$servmed = trim(fgets(STDIN));

print "Servi�os educacionais pagos: ";
$serveduc = trim(fgets(STDIN));

$ibanco = $rendbanco * 0.2;

if ($rendsalario <= 8000) {
	$isal = 0;
	
} else if ($rendsalario <= 24000) {
	$isal = $rendsalario * 0.15;
	
} else if ($rendsalario > 24000) {
	$isal = $rendsalario * 0.2;
}

$ioutros = $rendoutros * 0.1;
$servtotal = $servmed + $serveduc;
$itotal = $ibanco + $isal + $ioutros;
$maxabat = $itotal * 0.3;

if ($servtotal > $maxabat ) {
	$abat = $maxabat;

} else 
	$abat = $servtotal;	
	$imposto = $itotal - $abat;

print "\nTotal de Impostos:";
print "\nR$ $ibanco (sobre rendimentos banc�rios)";
print "\nR$ $isal (sobre sal�rios servi�os)";
print "\nR$ $ioutros (sobre outros rendimentos)";
print "\nR$ $itotal (total)";
print "\n-------------------------------------------------";
print "\nM�ximo a ser abatido:";
print "\nR$ $maxabat";
print "\n-------------------------------------------------";
print "\nTotal de valores poss�veis de abater:";
print "\nR$ $servmed (servi�oes m�dicos)";
print "\nR$ $serveduc (servi�os educacionais)";
print "\nR$ $servtotal (total)";
print "\n--------------------------------------------------";
print "\nImposto total:";
print "\nR$ $itotal (imposto bruto)";
print "\nR$ $abat (abatimnentos)";
print "\nR$ $imposto (total)";

		

<?php
print "Total de rendimentos bancários: ";
$rendbanco = trim(fgets(STDIN));

print "Total de rendimentos de salários ou serviços: ";
$rendsalario = trim(fgets(STDIN));

print "Total de outros rendimentos: ";
$rendoutros = trim(fgets(STDIN));

print "Serviços médicos pagos: ";
$servmed = trim(fgets(STDIN));

print "Serviços educacionais pagos: ";
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
print "\nR$ $ibanco (sobre rendimentos bancários)";
print "\nR$ $isal (sobre salários serviços)";
print "\nR$ $ioutros (sobre outros rendimentos)";
print "\nR$ $itotal (total)";
print "\n-------------------------------------------------";
print "\nMáximo a ser abatido:";
print "\nR$ $maxabat";
print "\n-------------------------------------------------";
print "\nTotal de valores possíveis de abater:";
print "\nR$ $servmed (serviçoes médicos)";
print "\nR$ $serveduc (serviços educacionais)";
print "\nR$ $servtotal (total)";
print "\n--------------------------------------------------";
print "\nImposto total:";
print "\nR$ $itotal (imposto bruto)";
print "\nR$ $abat (abatimnentos)";
print "\nR$ $imposto (total)";

		

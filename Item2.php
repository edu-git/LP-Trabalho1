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

If ($rendbanco > 24000
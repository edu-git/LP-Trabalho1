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

If ($rendbanco > 24000
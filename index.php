<?php
/* Selfwork 01 */

// variabile Integer
$integer = 10;

//variabile Float
$float = 10.5;

//variabile String
$string = "Ciao a tutti!";

//variabile Boolean
$boolean = true;



//fare comparire i tipi di dato delle variabili
var_dump($integer) . "\n";
var_dump($float) . "\n";
var_dump($string) . "\n";
var_dump($boolean) . "\n";

//da variabile a costante
define('INTEGER', $integer);
define('FLOAT', $float);
define('STRING', $string);
define('BOOLEAN', $boolean);

echo(INTEGER. "\n");
echo(FLOAT. "\n");
echo(STRING. "\n");
echo(BOOLEAN. "\n");
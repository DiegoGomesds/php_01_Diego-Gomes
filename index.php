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


/* selfwork 02 */

$text1 = "Marco";
$text2 = "Hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = 'hai';
$text7 = 'bevuto';
$text8 = "tutto.";

echo $text1. " ". $text2. " ". $text3. $text4. " ". $text5. " ". $text6. " ". $text7. " ". $text8;
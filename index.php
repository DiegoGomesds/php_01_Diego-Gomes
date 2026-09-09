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

echo $text1. " ". $text2. " ". $text3. $text4. " ". $text5. " ". $text6. " ". $text7. " ". $text8. "\n";


/* selfwork 03 */

$words1 = [
  'una',
  67,
  'vita',
  'colle',
  'mi',
  'rosso',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
  [
    'cammin',
    'Nel',
    [
      'selva',
      'la',
      [
        'via',
        'una',
        true,
      ]
    ],
  ]
],
    'ritrovai',
    'per'
  ],
'diritta'
];
$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'nostra',
  'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
  ]
];

$sentence1 = $words1[6][3][1][1]. " ". $words1[6][3][0]. " del ". $words1[6][3][1][0]. " di ". $words2['elemento2']. " ". $words1[2];

$sentence2 = $words1[4]. " ". $words1[6][4]. " ". $words1[6][5]. " ". $words1[6][3][1][2][2][1]. " ". $words1[6][3][1][2][0]. " ". $words1[6][0];

$sentence3 = $words2['elemento3'][2]. " ". $words1[6][3][1][2][1]. " ". $words1[7]. " ". $words1[6][3][1][2][2][0]. " ". $words1[6][1]. " ". $words2['elemento3'][1];

echo $sentence1. " ". $sentence2. ", ". $sentence3. ".". "\n";

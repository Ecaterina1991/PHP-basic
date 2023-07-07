<?php

//Tipuri de date simple/scalare: boolean(true/false), integer, float, string.

//INTEGER
//constanta - dimensiunea in octeți a tipului întreg de date
//echo PHP_INT_SIZE; //8 byte = 64 biți (8 octeți) = 2^63 + 2^62 + 2^61 + 2^60...
//util a fi cunoscut in manipularea valorilor mari

//constanta - valoarea maxima pe care o variabila de tip intreg o poate avea pe aceasta platforma
//echo PHP_INT_MAX;//9223372036854775807   aferent acelui tip intreg de date de 64 biți

$zecimal = 45697; //nr zecimal se calculeaza cu 7*10^0+9*10^1+6*10^2+5*10^3+4*10^4;

$octal = 0256; // nr octal (de la 0 la 7, incepe cu 0) se calculeaza 6*8^0+5*8^1+2*8^2+0*8^3;

//da exemplu de float standard, float exponential si float exponential cu notatie negativa

$z = 156.875;
$x=45e5; // 45*10^5   4500000
$i=8E-3; //0.008


//STRING

//ghilimele simple ''
//ghilimele duble " "

$exemplu = "Mie imi place sa 'citesc'.";
echo $exemplu;

$exemplu2 = "Mie imi place sa \"citesc\".";
echo $exemplu2;

$exemplu3 = 'Mie imi place sa "citesc".';
echo $exemplu3;

//HEREDOC 


  $eca = <<<EOT
   <h1>Eu sunt heredoc</h1>
   $x
  EOT;

echo $eca;

//!!! in linia in care incepe si in linia in care se termina sintaxa heredoc nu trebuie sa existe spatii libere dupa semnul de inceput

//NEWDOC

$eca2 = <<<'ECA'
<h2> Eu sunt newdoc si sunt ceva mai slab pentru ca nu pot citi variabile.</h2>
$x;
ECA;

echo $eca2;


//atribuire prin referinta

$a = 5;
$b = &$a;
$b=8;
$a=7;

echo $a;
echo $b;

//cele doua variabile sunt legate ireversibil cu ajutorul atribuirii prin referinta si se vor iubi pana in adanci batraneti

//isset  unset

//isset verifica daca o variabile este setata si nu este nula
//unset o sterge

$verif = isset($a);
var_dump($verif);

unset($a);

isset($a);

//empty verifica de asemenea daca este falsa, daca este '' [] 0, '0', nula

//variabila in variabila

$eu = "programator";
$$eu = "programare";

echo $programator; // programare

//Operatorii sunt
//unari ----- ! -- ++
//binari   op arirmetici si majoritatea celorlalti
//ternari ?

//valoare maxima array

$arr = [8,7,9,5,6,4,2];

$max=$arr[0];

foreach($arr as $item) {
  if($item>$max) {
    $max=$item;
  }
}

echo $max;

//https://www.youtube.com/watch?v=cxRXURjDeYA&t=2882s&ab_channel=LearnPHP

?>
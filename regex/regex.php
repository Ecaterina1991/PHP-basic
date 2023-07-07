<?php

// $string = "life is good and very good";

// if(preg_match('/^good/', $string)) {
//   echo "exista";
// }
// else {
//   echo "nu exista";
// }

// $text = "Ana, Mariana si Ion au fost prezent la spectacol, iar Stefan a lipsit";
// // $pattern = "/[A-Z]\w+[,\s]{1}/";

// // preg_match_all($pattern, $text, $matches);

// // // Afiseaza potrivirile gasite
// // print_r($matches[1]);





// $pattern = "/[A-Z]\w+[,\s]{1}/";

// preg_match_all($pattern, $text, $matches);
// //(ce cautam, unde cautam, unde depozitam rezultatul)

// print_r($matches[0]);

//

















// De exemplu, in stirng-ul 'Ana, Mariana si Ion au fost prezent la spectacol, iar Stefan a lipsit'
// putem sa extragem numele de persoane definind un pattern de genul : incepe cu litera mare, este format din litere si se termina cu o virgula sau un spatiu gol


// /[A-Z]\w+[,\s]{1}/

// "[A-Z]" - Reprezintă un singur caracter alfabet mare (litere de la A la Z).
// "\w+" - Reprezintă unul sau mai multe caractere alfanumerice (litere majuscule sau minuscule și/sau cifre).
// "[,\s]{1}" - Reprezintă un singur caracter care poate fi o virgulă sau un spațiu alb (spațiu, tab, linie nouă etc.).

//  /^regex/ - ^ simbol pentru negatie. /^good/' returneaza nu exista pentru ca devine false

// $variabila=preg_match_all('/good/', $string);
// //echo $variabila;

// //preg_match_all     returneaza nr de patternuri regasite in string

// $repl="/very good/";

// $variab_replace = preg_replace($repl, "awesome", $string);
// echo $variab_replace."<br>";

// $str_repl = str_replace("good", "nice", $string);
// echo $str_repl;

//diferenta intre utilizarea de preg_replace si str_replace, pe langa utilizarea delimitarilor si a limbajului regex este ca in cazul regex sintagma cautata trebuie asignata unei variabile si utilizata in functia preg_replace sub forma de variabila


//trecand careva caractere intre [] cautam aceste caractere

// $string2 = "Sneg a fost papusa";
// $pattern2 = "/[r]/";
// echo $rez = preg_match($pattern2, $string2);

//? marcheaza caracterul optional al expresiei de dinainte  [A-Z]?[0-9]  A1  2


//     /Invatam ([A-Z]{3,4}?) cu mare placere/

//? marcheaza faptul ca expresia aterioara care poate avea 3 sau 4 caractere poate fi prezenta sau poate lipsi




// /life is good [a-z]{6}?. /

//poate fi life is good dar si life is good enough.

//preg_match cauta o data sablonul si returneaza  1 daca il gaseste, iar preg_match_all returneaza de cate ori la gasit si da acces la toate elementele

// $string3 = "Oana este casiera.";
// $pattern = "/[aeiou]/i";

// $result = preg_replace($pattern, "", $string3);
// echo $result;


//atentie, caracterele se pun intre paranteze patrate, nu doar intre //  aici am eliminat vocalele

//ca sa eliminam consoanele:

// $string3 = "Oana este casiera.";
// $pattern = "/[^aeiou]/i";

// $result = preg_replace($pattern, "*", $string3);
// echo $result;

// $string3 = "Ma astept la ce e mai bun";
// $pattern = "/[A-Za-z\s]/";

// $result = preg_replace($pattern, "*", $string3);
// echo $result;

// $string3 = "Ma astept la ce e mai bun";
// $pattern = "/./";

// $result = preg_replace($pattern, "*", $string3);
// echo $result;  // Output: *******************

// VERSIUNE GRESITA
// $string3 = "Ma astept la ce e mai bun";
// $pattern = "/[.]/";

// $result = preg_replace($pattern, "*", $string3);
// echo $result;    //// nu ar trebui sa imi substituie totul cu ****?

// CAND VREM SA selectam toate caracterele cu ., nu folosim [], ci doar delimitatoarele //.

//https://regexr.com/
//multumesc




// $email="barganecaterina@yahoo.com";


// $sablon = '/^[A-Za-z0-9-_+%]+@[a-zA-Z-]+\.[a-zA-Z]{2,}$/';

// $result = preg_match($sablon, $email);

// echo $result;


//^ pentru inceput de sir si $ pentru sfarsit de sir se foloseste in interior raportat la delimitatoare, nu in exterior



//verificare nr utiliare sablon in string

// $string = "Imi doresc sa fiu fericita. Iti doresc sa fii fericit. Ii doresc intregii lumi fericire.";
// $pattern = '//';


// $pattern = '/ferici/';

// $res = preg_match($pattern, $string);

// echo $res;

//daca vrem sa cautam o anume sintagma, nu este necesar sa punem expresia intre paranteze patrate. sunt suficiente delimitatoarele
//paranteze patrate folosim cand cautam ceva mai putin specific


//inlocuire o expresie cu o alta

// 

// $res = preg_replace($pattern, "altceva", $string);
// echo $res;

//in loc de // ca delimitatori se pot folosi toate tipurile de paranteze () [] {} si de asemenea <>








//calcul numar de cuvinte din string

// $string = "Acesta este un string";


// preg_match_all('/\b\w+\b/', $string, $matches);

// $count=0;

// foreach($matches[0] as $item) {
//   $count++;
// }
// echo "Numarul de cuvinte din stringul meu este: ".$count;



// $s = "Bbracadabra";


// if(preg_match('/^A/', $s)) {
// echo "true";
// } else {
// echo "false";
// }


// $s = " ips lorem ipsum lorem ips";

// if(preg_match('/^lorem/', $s)) {
//   echo "exista lorem aici la inceput de string";
// }
// else {
//   echo "nu exista";
// }

// $s = " ips lorem ipsum lorem ipsum";

// if(preg_match('/ipsum$/', $s)) {
//   echo "ipsum e la final";
// }
// else {
//   echo "nu este";
// }

//$s = "ips 584856lorem 59560967ipsum 7-89-=89lorem ipsum";

// if(preg_match('/\d/', $s)) {
// echo "exista cifre aici";
// }
// else {
// echo "nu exista";
// }

//returnare cifre din string

// if(preg_match_all('/\d+/', $s, $matches)) {
//   $arr = $matches[0];
//   echo "Numerele din string sunt: ".implode(", ", $arr);
// } 
// else {
//   "nu exista";
// }






//gasiti toate literele majuscule intr-un sir

// $sir = "ugq8fgFYUDYDYjhgiDRTYSTUljoihiGYGY";

// if(preg_match_all('/[A-Z]/', $sir, $depozit)) {
//   $arr=$depozit[0];
//   echo "Majusculele dun string sunt: ".implode(", ", $arr );
// }


//Verificați dacă un șir conține cel puțin o vocală:

  //$sir = "ugq8fgFYUDYDYjhgiDRTYSTUljoihiGYGY";

// if(preg_match_all('/[aeoui]/i', $sir, $depozit)) {
//   $arr = $depozit[0];
//   echo "Sirul contine cel putin o vocala. Acestea sunt vocalele gasite:".implode(", ", $arr);
// }

//gasiti toate cuvintele care incep cu T

// $sir = "Mama Tata Copilul";

// if(preg_match_all('/\bT\w+/', $sir, $potriviri)) {
//   $arr = $potriviri[0];
//   echo "Sirul contine urmatoarele cuvinte care incep cu litera T: ". implode('', $arr);
// }

//Găsiți toate șirurile de caractere între ghilimele duble:


// $sir = 'vfaihwoa" akofpuhwqhg4738" jouqf0hy90';

// if(preg_match_all('/"([^"]+)"/', $sir, $potriviri)){
//   $arr=$potriviri[0];
//   echo "sirurile din ghilimele sunt: ".implode(" ", $arr);
// }

//Verificați dacă un șir este un număr de telefon valid (formatul: (xxx) xxx-xxxx):
//  $sir = "(156)897-1589";

//   //$sablon = '/^\(\d{3}\) \d{3}-\d{4}$/';

// if(preg_match_all('/^\(\d{3}\)\d{3}-\d{4}$/', $sir, $potriviri)) {
//   $arr=$potriviri[0];
//   echo "Numarul de telefon se potriveste cu schema si este: ".implode('', $arr);
// }

//Găsiți toate numerele într-un șir:

// $sir = "5465 bvsab 87985 kbgqdi 5456";

// if(preg_match_all('/\b\d+\b/', $sir, $potriviri)) {
//   $arr=$potriviri[0];
//   echo "Exista numere in sir si acestea sunt: " . implode(",", $arr);
// }


// Găsiți toate cuvintele care conțin cel puțin 3 litere și se termină cu litera "s":
// php
// Copy code
// $pattern = '/\b\w{3,}s\b/i';
// Găsiți toate șirurile care încep și se termină cu aceeași literă:
// php
// Copy code
// $pattern = '/^(.).*\1$/';
// Găsiți toate numerele de telefon în formatul internațional (exemplu: +1-555-123-4567):
// php
// Copy code
// $pattern = '/^\+\d{1,}-\d{3}-\d{3}-\d{4}$/';
// Verificați dacă un șir este un URL valid:
// php
// Copy code
// $pattern = '/^(http|https):\/\/[a-z0-9]+\.[a-z]{2,4}$/i';
// Găsiți toate cuvintele care încep cu litera "S" și au lungimea exact 3 caractere:
// php
// Copy code
// $pattern = '/\bS\w{2}\b/i';
// Găsiți toate cuvintele care conțin doar litere și spații:
// php
// Copy code
// $pattern = '/^[A-Za-z\s]+$/';
// Găsiți toate numerele între 100 și 999:
// php
// Copy code
// $pattern = '/\b[1-9]\d{2}\b/';
// Verificați dacă un șir este o adresă de e-mail validă:
// php
// Copy code
// $pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
// Găsiți toate cuvintele care conțin literele "a", "b" și "c", în orice ordine:
// php
// Copy code
// $pattern = '/\b(?=.*a)(?=.*b)(?=.*c)\w+\b/i';
// Găsiți toate șirurile care încep cu o vocală și se termină cu o consoană:
// php
// Copy code
// $pattern = '/^[aeiou]\w*[bcdfghjklmnpqrstvwxyz]$/i';
// Găsiți toate cuvintele care conțin exact trei vocale:
// php








?>
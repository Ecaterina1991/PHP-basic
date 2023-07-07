<?php

// //fiecare caracter intr-un string are 1 byte
// //max 256 caractere - gestionare cu string 2 la puterea 8
// //2GB dimensiune maxima string\

// //HEREDOC
// $string = <<<HEREDOC
//         <h1>Inceput de pagina</h1>
//         HEREDOC;
// echo $string;

// $now = <<<'NOW'
// <h2>Mijloc</h2>
// NOW;
// echo 'Caracterul \' se numeste apostrof';
// $var= "Caracterul \\ se numeste \n backslash";
// echo $var;

// $text1 = "Acesta este un text \n cu o linie nouă.";
// $text2 = '\t Acesta este un text \n cu o linie nouă.';
// echo $text1;


// //substr - al doilea parametru poate avea valoare negativa, caz in care se numara caracterele de la sfarsit

// $string3 = "O seara frumoasa";
// $lung = strlen($string3);
// echo $lung;

// $sectiune = substr($string3, -8);
// echo $sectiune;
// //substr poate avea 2 parametri: primul de unde incepe strungul extras si al doilea pana unde
// $sectiune2 = substr($string3, 0, 7);
// echo $sectiune2;
// //strpos caut index s

// $lit_s = strpos($string3, "s");
// $exact= $lit_s +1;

// echo "Litera s are numarul $exact in string";

// $cifre_pare="24810";
// $cifra = '4';

// $result = strpos($cifre_pare, $cifra);

// if($result!==false) {
//   $result = $result+1;
//   echo "Cifra $cifra are pozitia nr $result in sir"."<br>";
// }



// $lista_categori = "Tiberiu, Vlad, Ioana";

// $concurent = 'Ecaterina';

// $a_castigat = strpos($lista_categori,$concurent);
// //indexul este 0
// //0 nu este considerat true, ci false

// if($a_castigat===0) {
//   $a_castigat=1;
//   echo "Felicitari,$concurent! Ai castigat!";
// }
// else if($a_castigat) {
//   echo "Felicitari,$concurent! Ai castigat!";
// }
// else {
//   echo "Ne pare rau, $concurent, dar nu ai castigat!";
// }


// //  if($a_castigat){

// //     echo "Felicitari,$concurent! Ai castigat!";


// // }else{
// //     echo "Ne pare rau, $concurent, dar nu ai castigat!";
// // }

// // de ce nu afiseaza corect? // va las pe voi

// //stripos este caseinsensitive in comparatie cu strpos

// $cautareInsensitive = stripos($string3, "F");
// echo $cautareInsensitive;

// $utilizator="superADmin";

// if(stripos($utilizator, "admin")) {
//   echo "Variabila utilizator contine litere interzise dar functia stripos nu o taxteaza";
// }

// $utilizator2="superadmin";

// if(strstr($utilizator2, "admin")) {
//   echo "Variabila utilizator contine litere interzise si functia strstr o taxeaza";
// }


// $email = "digital@info.ro";
// $domeniu = strstr($email,'@');
// echo $domeniu; // va afisa @info.ro

// $parte = strstr($string3, "f");
// echo $parte;

// $dif= stripos($utilizator, "admin");
// echo $dif;//5


// $string4="ceai de musetel";
// $str_func = strstr($string4, "m");
// echo $str_func;

// $alta = stripos($string4, "m");
// echo $alta;

//strstr returneaza caracterele sirului incepand cu indexul literei cautate
//stripos returneaza insusi indexul literei cautate si atat. 

// $zero = 0;

//                    $string_gol = "";
//                    $cumparaturi = "6 mere, 4 pere";
//                    $bucuresti = "Bucuresti";

//                    var_dump($zero == $string_gol); // bool(false )
//                    var_dump($cumparaturi == 6); // bool(false)
//                    var_dump($bucuresti == $zero); // boo(false)


//strcmp

// $eu = "ECgufytytd";
// $ea = "Ecdtyedrsruigyufryf";


// $variabila_mea = strcmp($eu, $ea);
// if($variabila_mea) {
//   echo "0 nu inseamna false";
// }
// else {
// echo "Cred ca asta va fi afisata aici";
// }

// $variabila_mea = strcasecmp($eu, $ea);
// if($variabila_mea) {
//   echo "0 nu inseamna false";
// }
// else {
// echo "Cred ca asta va fi afisata aici. si in acest caz la fel";
// }

//strncmp    str + n + cmp    compara doar pana la pozitia n (al treilea parametru)

// $n=1;

// $variabila_mea = strncmp($eu, $ea, $n);
// if($variabila_mea) {
//   echo "0 nu inseamna false";
// }
// else {
// echo "Cred ca asta va fi afisata aici. si in acest caz la fel. si inca o data aici";
// }
// $n=1;

// $variabila_mea = strncasecmp($eu, $ea, $n);
// if($variabila_mea) {
//   echo "0 nu inseamna false";
// }
// else {
// echo "Cred ca asta va fi afisata aici. si in acest caz la fel. si inca o data aici. iarasi false";
// }

//cifrele si numerele negative nu returneaza false, doar 0 returneaza false!

//strcasecmp   str+case+cmp   - strcmp e functia string simpla de comparare strcasecmp - cea case insensitive

//strncasecmp  str+n+case+cmp

//str_replace

// $string5="maine avem un test mic!";

// $noul_string = str_replace("mic", "care dureaza 24h", $string5);
// echo $noul_string;

// $mare = strtoupper($string5);
// echo $mare;

// $mare = strtolower($string5);
// echo $mare;

// //ucfirst - primul caracter +++   ucwords - primul cuvant:prima litera++++

// $cuvant = ucfirst($string5);
// echo $cuvant;


// $str = "%s are %s";
// $nume1 = "Ana";
// $obiect1 = "mere";


// printf($str,$nume1,$obiect1); // va afisa pe ecran ghiciti Ana are mere



// $eu="Ecaterina";
// $nr= 10.e10;
// $actiune = "inoata";

// $string7 = "%s %s %.2f ture in fiecare dimineata in mare";

// printf($string7, $eu, $actiune, $nr);

// $nr=896E-0000;
// echo $nr;

//  expresia regulata  /patternul_este_cuprins_intre_delimitatori/    / sau # sau tilda sau %

// /in caz de utilizare\/ se escapeaza\//   sub forma de V cred
//toate parantezele si <> se trebuie escapate cand fac parte din expresia cautata

// $string = "curs$ de php1";

// if(preg_match('/[a-z]?[0-9.]/', $string)){
// echo " exista php1";
// }else {
//   echo "nu exista";
// }

// $aici = "O variabila";

// $alta_var = <<<ECO
// Eu sunt "$aici";
// ECO;

// echo $alta_var;

// $string = "Nu \" obosesc"; 
// echo $string;

//stripos identica cu strpos, dar case insensitive  str i pos --- i de la insensitive

//$rez = stripos($nume, "c");

//echo $rez;

//vreau sa returnez INA cu strstr  - este case insensitive

// $ina = strstr($nume, "i");
// echo $ina;

// //estimez la fel, false la toate si cu ===


// $zero = 0;

// $string_gol = "";
// $cumparaturi = "6 mere, 4 pere";
// $bucuresti = "Bucuresti";

// var_dump($zero === $string_gol); // bool(false )
// var_dump($cumparaturi === 6); // bool(false)
// var_dump($bucuresti === $zero); // boo(false)


//comparand cu strcmp() va fi mai mare c sau C?
//c

// $nume = "ECaterINA";
// $nume2 = "Marcel";

// $rez = strcmp($nume2, $nume);
// echo $rez;

//strcasecmp   str case cmp     case insensitive
//strncmp str n cmp   compara pana la pozitia n
//strncasecmp str n case cmp

//variatii strcmp:   strncmp - verifica pana la pozitia n strcasecmp este ca strcmp dar insensitive si strncasecmp este insensitive si verifica pana la pozitia n

//afiseaza cu print f stringul "Ecaterina are nota 7,5 sau 8 la purtare. si se duce la culcare." 

// $nume = "Ecaterina";
// $float = 7.5;
// $intreg = 8;
// $comportament = "purtare";

// $string = "%s are nota %.2f sau %+d la %s \\ si se duce la culcare.";
// //caracterul % poate fi precedat de - sau +

// printf($string, $nume, $float, $intreg, $comportament);

//%s %f etc se numesc specificatori

$str = "sensul vietii este evolutia";




?>

 
<?php

// function cub($a) {

// $cub = $a * $a * $a;

// print "Cubul cifrei $a este $cub.";

// }

//cub(10);
//$a=10;
//cub($a+1);
//cub(M_PI);

//functiile pot avea ca si argumente - variabile, sau expresii matematice: ex: variabila + cifra
//sau constante predefinite

// function n_nr($n) {
//  print "Primele $n numere naturale sunt:"."<br>";

// for ($i=0; $i<=$n; $i++) {
// print $i."<br>";
// }
// }

// n_nr(20);

//functie de incrementare

// function incrementare($a) {
//   $a = $a + 1;
//   //echo $a;
// }

// $x=2;
// incrementare($x);

//  echo $x;

 //dupa utilizare valorii lui x in functie, cand citim variabila x valoarea nu este modificata, ceea ce inseamna ca fara a utiliza atribuirea prin referinta, x isi "imprumuta" doar valoarea, dar nu se supune schimbarii de pe urma aplicarii functiei asupra valorii sale. 

 //daca vrem ca asupra variabilei trecute ca argument sa se faca modificari aplicabile variabilei, este cazulnmsa folosim & la parametru, cedi atribuirea prin referinta, si atunci atat argumentul cat si parametrul ocupa acelasi spatiu de memorie si devin ireversibil legate

//  function injumatatire(&$nr) {
//   $nr = $nr/2;
  
//  }

//  $x=100;

//  injumatatire($x);
//  injumatatire($x);
//  injumatatire($x);
// echo $x;

//mi-a dat eroare pt ca atribuirea prin referinta se poate face intre doua variabile, nu intr un nr si o variabila. ca sa ocupe acelasi loc de memorie trebuie sa fie "cutii de depozitare".


// function ridica_la_putere ($numar, $putere=2) {
//   $rezultat = $numar;

//   for($i=0;$i<$putere;$i++) {
//     $rezultat=$rezultat*$numar;
//   }
//  return $rezultat;
// }

// echo ridica_la_putere(2);


// function nr_pare($lista, &$arr=[]) {
//   $este_nr_par=false;
  
//   foreach ($lista as $item) {
//     if($item%2===0) {
//       $este_nr_par=true;
//       $arr[]=$item;
//     } 
//    }
//    return $este_nr_par;
//   }

// $lista =[4,2,1,5,6,8,9];

// if(nr_pare($lista, $pare)) {
//   echo "Numerele pare sunt: ".implode(" ,", $pare);
// }

//se poate insera apelarea unei functii intr-o structura de decizie de tip if



// function medie() {
//   $nr_argumente = func_num_args();
//   $sum=0;
  

//   for($i=0; $i<$nr_argumente;$i++) {
//     $sum+=func_get_arg($i);
    
//   }

// return $sum/$nr_argumente;
// }

// echo medie(1,2,3,4,5,589);

// function test_variabila_statica(){

//   static $a = 0;
//   echo $a;
//   $a++;

// }
// test_variabila_statica(); // va afisa 0 clar
// test_variabila_statica(); // va afisa 1
// test_variabila_statica(); // va afisa 2


//316


// function test(){

//   global  $a;
//   return $a; // intoarcem valoarea lui $a adica 1
// }
// $a = 1;

// $x = test(); // x preia valoarea returnata din functie, adica 1
// $x++; // crestem x cu 1
// echo "a = $a, x=$x"; // va afisa a=1 ,  x = 2

//functia contine doar variabila $. $x depoziteaza rezultatul apelarii functiei, apoi acest rezultat il incrementam in afara functiei. de ce ne-am astepta sa aiba alta valoare decat 2 dupa incrementare daca el nu se afla efectiv in interiorul functiei?
//functiile intorc valoarea returnata de expresia folosita in return, deci return $a; returneaza valoarea si nu referinta. dar care ar fi referinta lui $a in acest caz? referinta nu avem doar atunci cand folosim &?
//$x este variabila in depozitam rezultatul apelului functiei. banuiesc ca nu reprezinta o referinta




// function &test(){
//   global  $a;
//   return $a; // intoarcem referinta catre $a


// }

// $a = 1;
// $x = &test(); // x preia referinta returnata de functie adica $a
// $x++; // am uitat sa il maresc cu 1
// echo  "a = $a, x = $x"; // va afisa a = 2 , x = 2

//deci exista referinta si pentru numele de functie, nu doar pentru parametrii acesteia
//odata folosit & la ecivalarea lui $x cu test() ele devin identice si ocupa acelasi spatiu de memorie si cand se schimba una se schimba si cealalta si atunci cand incrementam $x automat se va incrementa si $a pentru ca asta e tot ce face functie test(), returneaza valoarea lui $a care in acest caz devine === $x ireversibil, inderdependent si pe termen lung
//ideea de baza este ca asa cum memoria de referinta se poate utiliza intre 2 variabile diferite, la fel se poate folosi si intre o functie si o variabila


// function suma($a,$b,$callback){
//   return $callback($a) + $callback($b);
// }
// $a = 5;
// $b = 2;

// echo suma($a,$b, function ($x){
//   echo "<br>";
//   return $x;

// }); // va afisa 7
// //practic se aplica functia din spatele lui callback asupra fiecarei dintre celelalte 2 variabile prin intremediul unei functii anonime care in primul caz rezurneaza x, deci returneaza valoarea lui a si a lui b, iar prin apelarea functiei suma, aduna rezultatele returnate
// echo suma($a,$b, function ($x){
//   echo "<br>";
//   return $x * $x;

// }); // va afisa 29
// //apoi va returna a*a+b*b

// echo suma($a,$b, function ($x){

//   return $x * $x * $x;
//   echo "<br>";
// }); // va afisa 133
//si in cele din urma a*a*a+b*b*b



//putem accesa valoarea unui array indexat nu doar cu formula ex $a[0], ci si cu o expresie matematica care contine o variabila inauntru intre parantezele patrate
//elementele din array se streg la baza cu unset($arr['cheie']/$arr[index])  !!! dar arrayul ramane cu goluri la nivel de index

//   bool  sort (array &$array [ , int $sort_flags = SORT_REGULAR] )
//de analizat!!!

// //
// Argumentul $array  este transmis prin referinta, &$array, este transmis astfel pentru ca functia reindexeaza array-ul
// astfel incat cheile vor fi sortate in functie de valorile elementelor
//de analizat aceasta informatie!!!

// $arr = [1,5,8,9,4];

//  sort($arr, SORT_REGULAR);

 //print_r($arr);

//  $arr_asociativ = [1=>80, 4 =>96, 8=>78];

//  asort($arr_asociativ);

//  //print_r($arr_asociativ);
// echo "Cheile arrayului sunt:";
//  foreach ($arr as $k=>$v) {
//   echo  "$k\n";
//  }

// function cmp($a,$b){


//   if($a == $b){
//       return 0;
//   }
//   return ($a < $b ) ? -1 : 1;
// }
//   $a = array(3,2,5,6,1);

// usort($a, "cmp");

//   foreach ($a as  $key => $value){

//       echo "$key => $value\n"."<br>";

//   }

//defineste o functie usort pentru a ordona un array multidimensional dupa una dintre valorile numerice pe care i le vei atribui
//usort ordoneaza crescator valorile si reindexeaza cheile
//uasort pastreaza cheile si ordoneaza crescator valorile
//ambele primesc functii definite de utilizator

// $arr_multi = [
//   ["Editura"=>"Stiinta", "Titlu"=> "Manual de Geografie", "nr pagini"=>800],
//   ["Editura"=>"Terra", "Titlu"=> "Medicina pentru copii", "nr pagini"=>400],
//   ["Editura"=>"Bio", "Titlu"=> "Biologie celulara", "nr pagini"=>500]
// ];

// //afisare "Medicina pentru copii"

// echo $arr_multi[1]["Titlu"];

// function compare($x,$y){

//   return $x["nr pagini"]-$y["nr pagini"];
// }

// usort($arr_multi, "compare");

// echo "<pre>";
// print_r($arr_multi);
// echo "</pre>";

//echo "Acesta este un text înainte de form feed. Acesta este un text după form feed.";

//uasort

// function compare2($x, $y) {
//   if($x===$y) {
//     return 0;
//   }
//   return ($x<$y) ? -1 : 1;
// }

// $arr=[1=>8, 15=>5, 10=>9];

// //uasort($arr, "compare2");

// // foreach($arr as $k=>$v) {
// //   echo "Cheia este $k si valoarea este $v";
// // }
// //uasort pastreaza cheile. nu reindexeaza.

// //ksort - ordoneaza dupa cheie

// ksort($arr);

// //print_r($arr);

// //explode()

// $string = "Am foarte putin timp liber";

// $arr2= explode (" ", $string);
// //print_r($arr2);

// //$string2=implode("-", $arr2);
// //echo $string2;

// //functia list

// $arr_list = ["maine", "voi", "inota"];
// list($viitor, $verb, $actiune) = $arr_list;

// //ordine intamplatoare
// $arr_intamplator = [4,8,9,6,5,1,0];
// $arr_neintamplator = [4,8,9];
// shuffle($arr_intamplator);
// //print_r($arr_intamplator);

// //array_diff - returneaza ce nu se repeta in cele 2 arrayuri

// $diferente = array_diff($arr_intamplator, $arr_neintamplator);

// //echo "Cifrele diferite sunt: " . implode (", ", $diferente);

// //range afiseaza sub forma de array elementel dintr-un interval specificat 

// $segment = range(45,50);
// print_r($segment); 


// $rate = array('tv'=>150,'casa'=>1300,'masina'=>600);

// echo "La ora actuala am " . count($rate) . "rate\n";

// // peste cateva luni ...

// unset($rate['tv']);
// echo "Am mai ramas doar cu " . count($rate) . 'rate';


// // peste o eternitate

// unset($rate);

// //cheile unui array trebuie sa fie doar de tip string sau int(restrictie)



//functie anonima

// function suma($a, $b, $callback) {
//   return $callback($a) + $callback($b);
// }

// $a = 5;
// $b=9;

// echo suma($a, $b, function($x) {
//   return pow($x,2);
// });

// echo suma($a, $b, function($x){
//   return $x+$x+$x;
// });


// Functii cu un numar varianil de argumente

// In acest sens avem la dizpozitie trei functii utilize

// 1. func_num_args - intoarce numarul de argumente transmis functiei
// 2. func_get_args - intoarce toate argumentele transmise functiei
// 3. func_get_arg($pozitie) -  intoarce argumentele de la pozitia $pozitie transmis functiei


// function medie(){

// $suma = 0;
// $numar_argumente = func_num_args();

// for($i = 0; $i < $numar_argumente; $i++){


// $suma += func_get_arg($i);


// }

// return $suma / $numar_argumente;

// }
// echo medie(5,10,9); // va afisa 8
// echo "<br>";
// echo  medie(2,8,3,5,6,12); // va afisa 6


//parsat in legatura cu html inseamna sa i se analizeze toate tagurile
//cand php identifica tagul specific php, i se aprinde becul, continutul tagului se activeaza si executa scriptul, in rest da mai departe codul html asa cum este
//dupa ce a expediat catre client documentul, nu mai poate face modificari, moriv pt care nici animatii nu face 



// func_num_args() - nr argumente
// func_get_args() argumentele
// func_get_arg($pozitie) argumentul specificat la pozitia de index indicat


// 
//$arr=['iarna','vara','toamna'];

//unset($arr[1]);

//print_r($arr);
// nu s-a reindexat array-ul

//array_pop($arr);
//array_shift($arr);

//array_shift - s-a reindexat
// array_unshift($arr, "un anotimp");
// print_r($arr);

//array_unshift s-a reindexat

// array_splice($arr, 0, 2);
// print_r($arr);

//putem salva elementele extrase cu array_slice intr-o variabila si sa le citim/folosim. iar cu array_splice stergem elementele+se reindexeaza arrayul

// $var = array_slice($arr, 0, 1);
// print_r($var);

// print_r($arr);
//utilizand array_slice() arrayul original ramane nemodificat. cu array_splice stergem.

// array_push($arr, "primavara");
// $arr[]="un anotimp dintr-o lume paralela";

//print_r($arr);
//atat array_push cat si array[] adauga un element nou in array la sfarsitul arrayului

//vreau sa sterg toamna
// array_splice($arr, 2, 1);
// print_r($arr);
//s-a sters si s-a reidexat

//dar daca as sterge cu unset ar ramane un gol in index

// unset($arr[2]);
// print_r($arr);

// sort($arr);
// print_r($arr, $sort_flags=SORT_REGULAR); //s-a ordonat alfabetic
//al doilea parametru este valoare implicita


// $arr=['iarna'=>'frig','vara'=>'foarte cald','toamna'=>'racoare', 'primavara'=> 'placut de cald'];
// $arr_num=[4,5,9,8];

//sortare dupa valoare
//ordonat alfabetic dupa valori

// asort($arr);
// print_r($arr);

//ordonare alfabetic dupa cheie

// ksort($arr);

// print_r($arr);

// $rev = array_reverse($arr_num);
// $rev2=array_reverse($arr);
// print_r($rev2);

//pentru a folosi array_reverse, se asigneaza sirul unei variabile si se citeste valoarea variabilei

//usort este pentru ordonare array indexat. uasort este pentru ordonare array asociativ

// function indexat_cmp($a,$b){
// if($a===$b) {
//   return 0;
// }
// ($a<$b) ? -1 : 1;
// }


//  //usort($arr_num, "indexat_cmp");
// uasort($arr, "indexat_cmp");

//  echo "Valorile sirului sunt: ";
// foreach ($arr as $k => $v) {
//  echo "Cheia: $k si Valoarea: $v -----";
// }

//pentru a folosi list() arrayul trebuie asignat unei variabile

// $arr=['inceput', 'mijloc', 'sfarsit'];
// $arr3=[1,2,3];
// $arr2=['inceput', 'mijloc', 'sfarsit', 'loop-urile infinite', 'pauzele lungi!'];
//list($capitol1, $capitol2, $capitol3) = $arr;


// $dif = array_diff($arr2, $arr);
// echo "Vreau sa evit: " . implode(", ", $dif);

//ATENTIE! se returneaza diferenta dintre primul si al doilea array, deci primul trebuie sa aiba mai multe elemente, nu invers

// $calendar = array("1900"=>"Intalnire afaceri","2000"=>"Meci");
// $evenimente = array("1900"=>"Ceai","2100"=>"Film");

//        $program = $calendar + $evenimente;
//        echo "<pre>";
//        print_r($program);
       //



      //  $arr=['iarna'=>'frig','vara'=>'foarte cald','toamna'=>'racoare', 'primavara'=> 'placut de cald'];
      //  $calendar = array("vara"=>"Intalnire afaceri","10"=>"Meci");

      //  $result2=array_merge($arr, $calendar);

      //  $result=$arr+$calendar;

      //  echo "<pre>";

      //  echo "Concatenare cu +";

      //  print_r($result);


      //  echo "Concatenare cu array_merge";
      //  print_r($result2);


       //cu operatorul + nu a afisat cuplul cheie - valoare in cazul cheii care se repeta in cele 2 arrayuri
       //cu array_merge a afisat cuplul cheie valoare din al doilea array in cazul in care cheia se repeta in ambele arrayuri si de asemenea nu afiseaza string numeric corect - orice cheie numerica este reindexata incepand cu zero 

      //  echo "</pre>";

       //Obs: array merge nu citeste corect cheia numerica, o citeste zero, iar concatenarea de array cu + pastreaza cheia numerica










  //      $rucsac = array("izopren","sac de dormit","haine");
  //      array_push($rucsac,"bocanci");

  //       //$rucsac = array("izopren","sac de dormit","haine", "bocanci");
  //      // vrem sa scoatem sacul de dormit, care este sub haine si bocanci

  //     //  do {

  //     //      $obiect  = array_pop($rucsac);

  //     //  }while($obiect != "sac de dormit");
  //     //  echo "Dupa ce am scos sacul de dormit, in rucsac mai am: " . implode($rucsac);



  //  $ghiozdan = ['matematica', 'romana', 'pixuri', 'penar', 'compas', 'telefon', 'sandwich'];

  //  //vrem sa folosim o functie tipica stivei = stack ca sa ramana in ghiozdan doar primele trei componente 

  //  do {
  //   $a_ramas = array_pop($ghiozdan);

  //  }while($a_ramas!='penar');


  //  echo "Dupa ce am scos din ghiozdan celelalte lucruri am ramas cu " . count($ghiozdan) . " obiecte, intre care: ";

  // //  foreach ($ghiozdan as $item) {
  // //    echo "$item, "; 
  // //    if($item=="romana") {
  // //     echo "pixuri."; 
  // //    }
  // //  }

  // echo "Dupa ce am scos celelalte obiecte in ghiozdan au ramas: ". implode (",  ", $ghiozdan).".";





//   $produse = array("paini"=>7,"oua"=>11,"mere"=>5);

//   $clienti = array();

//   $clienti[] = "Andrei";
//   $clienti[] = "Doina";
//   $clienti[] = "Sorin";

//   //$clienti = ["Andrei", "Doina", "Sorin"];

//   // Presupunem ca fiecare client va dori sa cumpere 3 paini, 3 oua si 2 mere


// do{
//     $client = array_shift($clienti);

//     $paini = min($produse['paini'], 3);
//     $produse['paini'] -= $paini;

//     $oua = min($produse['oua'], 3);
//     $produse['oua'] -= $oua;

//     $mere = min($produse['mere'],2);
//     $produse['mere'] -= $mere;

//     echo "$client  a cumparat $paini paini, $oua oua, $mere mere\n <br>";
// }while(count($clienti));

// echo "In magazin au mai ramas $produse[paini] paini, $produse[oua] oua, $produse[mere] mere";







// $pacienti = ["Dl Gardian", "Dna Petrea", "Dna Mircea"];

// $stoc_med = ["Nurofen" => 10, "Paracetamol" => 3, "Baneocin pudra" => 7];

//vrem ca fiecare pacient sa ia 4 ct Nurofen, 2ct paracetamol, 1ct Baneocin pudra

// do{
//   $pacient = array_shift($pacienti);

//   $nurofen = min($stoc_med["Nurofen"], 4);
//   $stoc_med["Nurofen"] -= $nurofen;

//   $paracetamol = min($stoc_med["Paracetamol"], 2);
//   $stoc_med["Paracetamol"] -= $paracetamol;

//   $baneocin = min($stoc_med["Baneocin pudra"], 1);
//   $stoc_med["Baneocin pudra"] -= $baneocin;

//   echo "Pacientul $pacient a cumparat $nurofen ct Nurofen, $paracetamol ct Paracetamol si $baneocin ct Baneocin.";


// } while(count($pacienti));





// //Exercitiu de interviu

// // Se dă un calendar de planificări, în care există mai multe sloturi de timp, cu statusul disponibil/indisponibil.  La introducerea unei noi planificări, trebuie să se suprascrie sloturile existente, sau dacă se suprapune peste înregistrări de același tip (disponibil/indisponibil) să se facă merge.
// $schedules = array(
//     	array("id" => 1, "from" => "2018-07-03 08:00", "until" => "2018-07-03 09:00","available" => "false"),
//     	array("id" => 2, "from" => "2018-07-03 10:00", "until" => "2018-07-03 11:00", "available" => "false"),
// 	array("id" => 3, "from" => "2018-07-03 13:00", "until" => "2018-07-03 15:00", "available" => "true")
// );


// // Se introduce o nouă programare în calendar, respectând următoarele condiții:
// // •	Dacă se suprapune cu un interval existent având același status (true/false), se concatenează

// // Exemplu:

// $new=array("from" => "2018-07-03 07:00", "until" => "2018-07-03 08:30","available" => "false");

// // Rezultat:

// $schedules = array(
//     	array("id" => 1, "from" => "2018-07-03 07:00", "until" => "2018-07-03 09:00","available" => "false"),
//     	array("id" => 2, "from" => "2018-07-03 10:00", "until" => "2018-07-03 11:00", "available" => "false"),
// 	array("id" => 3, "from" => "2018-07-03 13:00", "until" => "2018-07-03 15:00", "available" => "true")
// );


// // •	Dacă se suprapune cu un interval existent cu status diferit, se suprascrie

// // Exemplu:

// $new=array("from" => "2018-07-03 07:00", "until" => "2018-07-03 08:30","available" => "true");

// // Rezultat:

// $schedules = array(
//     	array("id" => 1, "from" => "2018-07-03 08:30", "until" => "2018-07-03 09:00","available" => "false"),
//     	array("id" => 2, "from" => "2018-07-03 10:00", "until" => "2018-07-03 11:00", "available" => "false"),
// 	array("id" => 3, "from" => "2018-07-03 13:00", "until" => "2018-07-03 15:00", "available" => "true"),
// 	array("from" => "2018-07-03 07:00", "until" => "2018-07-03 08:30", "available" => "true")
// );

// function cub($a) {
//   //$result = pow($a, 3);
//   $result=$a*$a*$a;
//   print $result;

// } 

// cub(5);

//exemplu de functie care afiseaza n nr naturale



// function nr_naturale($nr) {
// for($i=1; $i<=$nr; $i++) {
//   print $i."<br>";
// }
// }

// nr_naturale(10);


// function &anonim() {
// global $x;
// return $x;
// }

// $x=7;
// $y= &anonim();
// $y++;

// echo "$y si $x";

//utilizare func_num_args() si func_get_args() si func_get_arg($pozitie) in calculul unei medii 



// function medie() {

// $sum=0;
// $nr = func_num_args();


//   for($i = 0; $i < $nr; $i++) {
//     $sum += func_get_arg($i);
    
//   }

// return $sum/$nr;

// }

// echo medie(5,6,2,5,8);

    //  function medie(){

    //         $suma = 0;
    //         $numar_argumente = func_num_args();

    //         for($i = 0; $i < $numar_argumente; $i++){


    //             $suma += func_get_arg($i);


    //         }

    //         return $suma / $numar_argumente;

    //     }
    //    echo medie(5,10,9); // va afisa 8
    //     echo "<br>";
    //   echo  medie(2,8,3,5,6,12); // va afisa 6


    

  //   function mesaj(){

  //     // ops, grija mare cand utilizati gloabl

  //     global  $utilizator;

  //     echo "Salut, $utilizator";

  // }
  // $utilizator = "Dumitrescu Gabriel";

  // mesaj(); // va afisa Salut, ....



  // function impar($n) {
  //  if($n%2!==0) {
  //   return true;
  //  }
  //  else {
  //   return false;
  //  }
  // }

  // $nr=51;


  // $variab = impar($nr);
  
  // $final = ($variab) ? "nr impar" : "nr par";

  // echo $final;



//  function suma($a, $b, $callback) {
//   return $callback($a) + $callback($b);
//  }

//  $a=1;
//  $b=2;

//   echo suma($a, $b, function($x) {
//     echo "<br>";
//   return $x;
  
//  });
//   echo suma($a, $b, function($x) {
//   echo "<br>";
//   return $x*$x;
  
//  });
//   echo suma($a, $b, function($x) {
//   echo "<br>";
//   return pow($x,5);
  
//  });

//print_r - afiseaza continutul unei variabile
//var_dump - continut+tip de date
//die, exit - incheie scriptul
//set_time_limit - seteaza durata maxima de executare a scriptului

//intr-un sir putem avea mai multe valori identice, dar nu si mai multe chei. se suprascriu

// $array = array(

//   1 => "a",
//   "1"=> "b",
//   1.5 => "c",
//   true => "d",

// );
// echo "<pre>";
//       var_dump($array);
// echo "</pre>";

// $array = array(
//   false => "d"

//);

// $array = [1, 5, '8', 6, 3, '7'];

// sort($array, SORT_NUMERIC);

// echo "<pre>";
//       print_r($array);
// echo "</pre>";


// $v= "Valentin";
// $e= "Ecaterina";

// function concatenare() {
// $GLOBALS['z'] = $GLOBALS['v'] . $GLOBALS['e'];
// }

// concatenare();

//echo $z;

//variabila superglobala GLOBALS[''] face accesibile variabilele abordate de oriunde. se trece intre [] si intre ''  numele variabilei

//echo $_SERVER['SERVER_ADDR'];

// $v= $_SERVER['SERVER_ADDR'];
// var_dump($v);

?>
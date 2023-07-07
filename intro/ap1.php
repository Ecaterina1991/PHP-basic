<?php 



//baza 10
$numar = 23;
$binar = decbin($numar);
echo $binar;//afiseaza 10111

//baza 2 in baza 10:

$binar = '10111';
$decimal = bindec($binar);
echo $decimal; //23

//pentru a verifica un bit dintr-un  numar utilizam:

//   $numar = 5;
//   $n = 3;

//   if(($numar >> ($n-1)) & 1) {
//     echo "Bitul $n este setat la 1";
// } else {
//   "Binul $n este setat la 0";
// }

//pentru stergerea celui de-al n-lea bit dintr-un numar utilizam

$numar = 9;
$n = 2;

$msk = ~(1 << ($n-1)); //msc pentru a seta bitul la zero
$numar &= $n; // setam bitul la zero
echo $numar; // afisam 9 in baza 10, sau 1001 in baza 2

// ~ tilda

// &= (si egal)
//convertirea unui numar din baza 10 in baza 16:

$numar = 1234;
$hex = dechex($numar);
echo $hex; // afiseaza "4d2"


//Operatori pe biti:

//"&" (si pe biti)

$a = 5; // 101 in baza 2
$b = 3;// 011 in baza 2

$rezultat = $a & $b; // 001 in baza 2
echo $rezultat; // afiseaza 1

// "|" sau pe biti

$a=5; //101 in baza 2
$b = 3; // 011 in baza 2

$rezultat = $a | $b; //111 in baza 2
echo $rezultat;  //afiseaza 7

//(xor)

$a = 5; // 101 in baza 2
$b = 3; // 011 in baza 2


$rezultat = $a ^ $b; // 110 in baza 2
echo $rezultat; // corect este 6 si modificam utilizand ()

//'~' tilda

$a = 5; // 101 in baza 2
$rezultat = ~$a; // multi de 1 in baza 2

echo $rezultat; // afiseaza -6;

//"<<" deplasare spre stanga pe biti

$a = 5; // 101 in baza 2
$rezultat = $a << 2; // 10100 in baza 2

echo $rezultat; // afiseaza 20

//">>" deplasare spre dreapta pe biti

$a = 5; // 101 in baza 2
$rezultat = $a >> 1; // 10 in baza 2
echo $rezultat; // afiseaza 2


//Functia decbin - converteste un numar din baza 10 in baza 2 

$a = 5; // 101 in baza 2
$res = decbin ($a);
echo $rez;

//functia bindec (): converteste un numar din baza 10 si returneaza valoarea

$a = "101"; // 5 in baza 10
$rezultat = bindec($a);
echo $rezultat; // afiseaza 5

//functia dechex() => converteste un numar din baza 10 in baza 16 si returneaza un sir de caractere in baza 16

$a = 15; // F in baza 16
$rezultat = dechex($a);
echo $rezultat;//afiseaza F

//functia hexdec() => converteste un numar din baza 16 in baza 10 si returneaza un numar intreg

$a = "F"; // 15 in baza 10
$rezultat = hexdec($a);
echo $rezultat; // afiseaza 15

//functia bix2hex => converteste un numar din baza 2 in baza 16

$a = "1010"; // a in baza 16
$rezultat = bin2hex($a); // afiseaza 
echo $rezultat;

//functia hex2bin() => converteste un numar din baza 16 in baza 2

$a = "A"; // 1010 in baza 2
$result = hex2bin($a);
echo $result; // ar trebui sa afiseze 1010 

//un exemplu de exercitiu pe biti este:
function intToBinary($number){
  $binary = '';
  while($number > 0) {
    $binary = ($number %2) . $binary;
    $number = (int)($number / 2);
  }
  return $binary;
}
echo intToBinary(7); //afiseaza 111

//alt exemplu:
function setBit($number, $bitPosition) {
$msk = 1 << $bitPosition;
return $number | $msk;
}

echo setBit(5, 1); //afiseaza 7
//(101 devine 111 prin setarea celui de-al doilea bit)

//alt exemplu

function intToHex($number) {
  return dechex($number);
}
echo intToHex(255);


//alt exemplu

function reverseBits($number) {
  $reversed = 0;
  $bits = 31; // numarul maxim de bits

  while($bits >= 0) {
    $reversed = ((number & 1) << $bits);
    $number >>= 1;
    $bits--;
  }
  return $reversed;
}
echo reverseBits(43261596);

//cateva exemple cu operatori logici

$a = 5;
$b = 3;

if($a > 0 && $b > 0) {
  echo "Ambele numere sunt pozitive";
}

$a = 5;
$b = 3;

if ($a == 5 || $b == 5) {
  echo "cel putin un numar este egal cu 5";
}

$a = true;

if(!$a) {
  echo "A este fals!"; 
} else {
  echo "A este adevarat!";
}

//exercitiu
//verificam daca un utilizator are varsta legala pentru 

$age = 20;
$country = "Romania";
$legalAge = 18;
$isLegal = false;

if($age >= $legalAge && ($country == "Romania" || $country == "France" || $country == "Spania")) {
  $isLegal = true;
}
else if ($isLegal) {
  echo "Utilizatorul are varsta legala pentru a vota in" . $country;
} else {
  echo "Utilizatorul nu are varsta legala pentru a vota in " . $country;
}

?>



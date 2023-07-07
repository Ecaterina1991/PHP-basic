<?php

    // Tipuri de date


    // Tipuri de date simple ( scalar )

    /*BOOLEAN ( true / false )
     *  Integer
     *  Float
     * String
     */


    // Integer

    echo  PHP_INT_SIZE."<br>"; // 8 bytes - 64 biți => 2^63 biți + 2^62 biți + ...
    echo PHP_INT_MAX."<br>"; // 892233720...



  //  $a = 1234; // zecimal - ( in baza 10  - 1X10^3 + 2X10^2 + 3*10^1 +4*10^0....)
    //$a = -20; // numar negativ

    $a = 0123; // numar octal ( echivalent cu 83 decimal => in baza 8  - 1X8^2 + 2X8^1+  3X8^0 = 64 + 16 + 3 = 83) in acest calcul zero din variabila $a nu se ia in calcul pentru ca este lipsit de semnificatie intr-o suma


    // Float

    $a = 1.234;
    $b = 1.2e3;//notatie exponentiala   e3 este echivalent cu   *10^3, deci *1000, rezultat = 1200
    $c = 7E-10; //format stiintific   -  E-10   echivaleaza cu nr * 10^-10, deci mutam virgula de 10 ori la stanga incepand cu cifra 7 si obtinem 0.0000000007

    //echo $c;

    // String

    /*  a) Intre ghilimele simple = ''
     *  b) Intre ghilimele duble = ""
     *  c ) Heredoc , incepe cu operatorul <<<IDENT urmat de un indentificator, apoi pe liniile urmatoare  este sirul de caractere - IDENT;
        d) Newdoc la fel ca si here doc numai ca se adauga ghilimele simple ex : echo <<<'DDD' iar la heredoc echo <<<DDD
    */

    // Moduri de adaugare a variabilelor intr-un string

    // utilizand {} in interiorul string-ului dublu! si utilizand simbolul uniri ( . ) dupa terminarea stringului

    $var = "New";
    echo "Variabila este {$var}";


    // Referinta &


    // exemplu de atribuire prin referinta
    echo "<br>";
    $var1 = 'rosu';
    $var2 = &$var1; // $var2 este tot rosu
    $var2 = 'verde'; // rezulta ca valoarea pentru $var1 s a schimbat  in 'verde';
    $var1='roz';
    $var2='albastru';

echo $var1."<br>";

//utilizarea atribuirii prin referinta & leaga ireversibil valorile celor doua variabile, facandu-le identice. 
//oricare variabila dintre cele doua in cazul carora s-a folosit atribuirea prin referinta, daca se schimba, se schimba si cealalta valoare. ocupa acelasi spatie de memorie. daca insa nu se foloseste & sunt independente

    // pentru a verifica daca o variabila exista utilizam isset($var) care returneaza TRUE in cazul in care variabila nu exista, returneaza false

    // pentru a elimna o variabila utilizam unset($var);
//
//    unset($var2);
//    echo $var2;


        // variabila in variabila ( $$ )

        $var = 'variabila';
        $$var  = 'test';  // 
        echo $variabila; // o sa afiseze test




$exemplu = 'valoarea_variabilei';
$$exemplu = 'alta valoare';

echo $valoarea_variabilei;// va returna 'alta valoare'

//atribuind semnul $$ unei denumiri de variabila, ii transformam valoarea ei intr-o alta variabila care depoziteaza valoarea variabilei marcata cu $$




    // Operatori
    // unari ( !, ++ , -- )
    // binari (  aritmetici, si majoritatea celorlatii operatori)
    // ternari ( ? )

 


        echo "<br>";

        echo 2+2;

        $x = 2;
        echo "<br>"." $x++: ";
        echo $x++;

echo "<br>"."$x-- ";
        echo $x--;

echo "<br>"."++$x: ";
        echo ++$x;

echo "<br>"."--$x: ";

        echo --$x;

        //la prima afisare a operatorului $x++ valoarea va fi neschimbata, iar in cazul ++$x va fi schimbata pentru ca citirea se face de la stanga la dreapta si cand avem ++/-- in partea stanga mai intai se face incrementarea/decrementarea apoi se citeste variabila

echo "<br>";
       // adunare
        $xx = 5;
        $x  +=3;
        echo "Valoarea lui x dupa adaugare este " . $x . '<br>';

echo "<br>";

        $impartire = 10 /2;
        echo $impartire;



echo "<br>";
        $inmultire = (5 * 2) + (10 * 3) / 5;
        echo $inmultire;
echo "<br>";

        // Array


        // exemplu :

        $culori = array(
            '0' =>'rosu',
            '1'=>'alb',
            '2'=>'verde',



        );

        // De la PHP 5.4 se poate declara fara cuvantul array


        $culori = ['0'=>'rosu', '1'=>'verde','2'=>'alb' ];


    // Operatorii pentru array


        //    $a  + $b;
        //    $a == $b;
        //    $a === $b;
        //    $a != $b;
        //    $a <> $b;
        //    $a !== $b;


        $array1 = ['a'=>'a1','b'=>'b1'];
        $array2 = ['a'=>'a2','b'=>'b2','c'=>'c2'];


        $array1 = ['a','b'];
        $array2 = ['c','d','e'];
        echo "REzultat array:"."<br>";
        var_dump($array1 + $array2)."<br>"; // nu se poate converti  cu echo  // ['a'=>'a1','b' =>'b1', 'c'=>'c2'];

        echo "REzultat array merged:"."<br>";
        $result=array_merge($array1,$array2);
        print_r($result);


        // Operatorul de executie (backtick)



        // Reprezinta rezultatul unei comenzi shell. Comanda se pune inte `` - nu sunt ghilimele simple!, ci backticks ( tasta care este
//  inaintea cifrei 1 sau pe jos o gasiti la tastatura pentru MAC )
//
//

       $output =  `ls - l`;// afiseaza continutul folderului unde ruleaza scriptul
       $output = `ls`;

        echo $output; // aici nu stiu de ce nu afiseaza :)
        // o sa verifc documentatia, probabil a fost actualizata si nu stiu eu :)


        echo '<br>';

        $name = "Test1";
        echo `echo Hello $name`;

        // exercitiu cu array  utilizand foreach


        $numere = [5,100,3,6,7,1];

        $max = $numere[0];

        foreach ($numere as $number){
            if($number > $max){
                $max = $number;
            }
        }
        echo "Numarul maxim din array este: " .$max."<br>";



































        // suma elementelor din array


        $numbers = [5,10,20,401,99];

        $sum = 0;

        foreach ($numbers as $numbs){
            $sum += $numbs;
        }
echo "Suma elementelor din array este " . $sum;

            echo "<br>";
            echo "<br>";
            echo "<br>";

echo "Sortarea descrescatorare";

$num = [5,10,3,6,1];


rsort($num);
echo "Array sortat descrescator este : ";

print_r($num);


        // gasirea indexului unui element


            $ind = [5,10,3,6,1];

            $searchNumbers = 6;

            $index = array_search($searchNumbers,$ind);
            var_dump($index);

            if($index !== false)
            {
                echo "Elementul " . $searchNumbers ."se afla la indexul " . $index;
            }else{
                echo "Elementul " . $searchNumbers . " nu se afla la indexul " . $index."<br>";

            }

            // for($i=0; $i<count($ind); $i++){
        
            //  if($ind[$i]==$searchNumbers) {
            //   echo "indexul numarului cautat este $i";
            //  }
       
            // }
            
     


            ?>













<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podstawy</title>
</head>
<body>


    <?php
    $imie = "Dawid Gorczakowski";
    echo $imie;

    echo "<br>";
    echo "<br>";

    $numer_stanowiska = 8;
    echo $numer_stanowiska;

    echo "<br>";
    echo "<br>";

   $wynik = 75;
   if($wynik >= 75){
      echo "Zdałeś swój egzamin zawodowy";
   }
   else {
      echo "Nie zdałeś egzaminu zawodowego";
   }

   echo "<br>";
   echo "<br>";

    for($i = 1; $i <= 8; $i++){
      echo $i;
    }

   echo "<br>";
   echo "<br>";

   $a = 75;
   $b = 25; 
   echo $a + $b;

    

    ?>
    
</body>
</html>



<!-- 

1. Wypisz na ekranie

a) numer 1
b) Imię i nazwisko zdającego
////
$numer_stanowiska = 1;    | $zdajacy = "Dawid Gorczakowski"
echo $numer_stanowiska;   | echo $zdajacy;


2. Wypisz działanie a + b deklarując a = 10, b = 1
////
$a = 10;
$b = 1;
echo $a + $b;


3. Warunek, wyświetlający komunikat:
        - "Zdałeś egzamin zawodowy" - w przypadku uzyskania co najmniej 75%
        - "Nie zdałeś egzaminu zawodowego" - w przypadku uzyskania wyniku mniejszego od 75%
////
$egzamin = 90;

       if($egzamin >= 75){
        echo "Zdałeś swój egzamin zawodowy";
       }
       else {
        echo "Nie zdałeś egzaminu zawodowego";
       }


4. Pętle
////
a) Wypisz na ekranie liczby od 1 do 10

       for($i = 1; $i < 10; $i++){
           echo $i;
       }

a2) zmodyfikuj plik tak, aby wszystkie elementy pętli wypisały się
    jeden poddrugim
    pod echo $i; wpisujesz: echo "<br>";



    //1. Zmienna wypisująca imię i nazwisko 
       $dane = "Dawid Gorczakowski";
       echo $dane;
       echo "<br>";
       echo "<br>";
    //2. Zmienna przyporządkująca numer stanowiska = 8
       $numer_stanowiska = 8;
       echo $numer_stanowiska;
       echo "<br>";
       echo "<br>";
    //3. Warunek wypisujący tekst dotyczący zdania egzaminu zawodowego
       $wynik_egzaminu = 100;
       if($wynik_egzaminu >= 75){
        echo "Zdałeś swój egzamin zawodowy";
       }
       else{
        echo "Nie zdałeś egzaminu";
       }

       echo "<br>";
       echo "<br>";
    //4. Pętla for wyświetlająca pierwsze 8 wartości liczbowych
       for($i = 1; $i <= 8; $i++){
        echo $i;
       }

       echo "<br>";
       echo "<br>";
    //5. Dodawanie dwóch zmiennych i wyświetlenie wyniku
       $a = 75;
       $b = 25;
       echo $a + $b;

 -->
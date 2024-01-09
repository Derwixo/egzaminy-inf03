<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


    <?php
    $wynik = 75;
    for ($i = 1; $i <= 10; $i++){
      if($i * 10 >= $wynik){
         echo "<h1>Zdałeś swój egzamin zawodowy</h1>";
      }
      else {
         echo "<h1>Nie zdałeś</h1>";
      }
    }

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

 -->
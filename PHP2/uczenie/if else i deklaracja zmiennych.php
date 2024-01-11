<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


    <?php
        $egzamin = 75;
        if ($egzamin >= 75){
            echo "<p>Zdałeś swój egzamin zawodowy</p>";
        }
        else {
            echo "<p>Nie zdałeś egzaminu</p>";
        }

    ?>
    
</body>
</html>



<!-- 

1. Wypisz na ekranie

a) numer 1
b) Imię i nazwisko zdającego

$numer_stanowiska = 1;    | $zdajacy = "Dawid Gorczakowski"
echo $numer_stanowiska;   | echo $zdajacy;


2. Wypisz działanie a + b deklarując a = 10, b = 1

$a = 10;
$b = 1;
echo $a + $b;


$egzamin = 75;

        if($egzamin >= 75) {
            echo "Zdałeś swój egzamin zawodowy!"; 
        }
        else {
            echo "Nie zdałeś egzaminu";
        }


 -->
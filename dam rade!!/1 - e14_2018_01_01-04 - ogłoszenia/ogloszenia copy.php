<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    
    <div id="baner">
        <h1>Portal ogłoszeniowy</h1>
    </div>

    <div id="lewy">
        <h2>Kategorie ogłoszeń</h2>
        <ol>
            <li>Książki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
            <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
        </ol>
        <table>
            <tr>
                <td>Liczba ogłoszeń</td>
                <td>Cena ogłoszenia</td>
                <td>Bonus</td>
            </tr>
            <tr>
                <td>1 - 10</td>
                <td>1 PLN</td>
                <td rowspan="3">Subskrybcja newslettera to upust 0,20 PLN na ogłoszenie</td>
            </tr>
            <tr>
                <td>11 - 50</td>
                <td>0,80 PLN</td>
            </tr>
            <tr>
                <td>51 i więcej</td>
                <td>0,60 PLN</td>
              
            </tr>
        </table>
    </div>

    <div id="prawy">
        <h2>Ogłoszenia kategorii książki</h2>
        <!-- skrypt -->
        <?php
           $db = mysqli_connect('localhost','root','','2018_ogloszenia');
           $query1 = "SELECT id, tytul, tresc FROM `ogloszenie` WHERE kategoria = 1;";
           $query2 = "SELECT telefon FROM ogloszenie, uzytkownik WHERE ogloszenie.uzytkownik_id = uzytkownik.id;";
           $wynik1 =  mysqli_query($db, $query1);
           $wynik2 =  mysqli_query($db, $query2);
           while($wiersz = mysqli_fetch_row($wynik1)){
            $wiersz2 = mysqli_fetch_row($wynik2);
            echo "<h3>$wiersz[0] $wiersz[1]</h3>";
            echo "<p>$wiersz[2]</p>";
            echo "<p>telefon kontaktowy: $wiersz2[0]</p>";
           }

        ?>
    </div>

    <footer>
        Portal ogłoszeniowy opracował: PESEL
    </footer>
</body>
</html>
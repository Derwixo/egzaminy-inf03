<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>WITAMY W BIURZE PODRÓŻY</h1>
    </header>

    <div id="dane">
        <h3>ARCHIWUM WYCIECZEK</h3>
        <!-- skrypt 1 -->
        <?php 
            $db = mysqli_connect('localhost','root','','2020_egzamin4');
            $query1 = "SELECT id, cel, cena FROM `wycieczki` where dostepna = 0;";
            $wynik1 = mysqli_query($db, $query1);
            while($wiersz = mysqli_fetch_row($wynik1)){
                echo "<br> $wiersz[0]. $wiersz[1], cena: $wiersz[2]";
            }
           
        ?>
    </div>

    <div id="lewy">
        <h3>NAJTANIEJ...</h3>
        <table>
            <tr>
                <td>Włodzy</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Francja</td>
                <td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Hiszpania</td>
                <td>od 1400 zł</td>
            </tr>
        </table>
    </div>  

    <div id="srodkowy">
        <h3>TU BYLIŚMY</h3>
        <!-- skrypt 2 -->
        <?php
            $query2 = "SELECT nazwaPliku, podpis FROM `zdjecia` ORDER by podpis DESC;";
            $wynik2 = mysqli_query($db, $query2);
            while($wiersz = mysqli_fetch_row($wynik2)){
                echo "<img src='$wiersz[0]' alt='$wiersz[1]' </img>";
            }
            mysqli_close($db);
        ?>
    </div>

    <div id="prawy">
        <h3>SKONTAKTUJ SIĘ</h3>
        <a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>

    <footer>
        <p>Stronę wykonał: PESEL</p>
    </footer>

</body>
</html>
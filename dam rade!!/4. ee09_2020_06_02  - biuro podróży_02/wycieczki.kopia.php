<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>

    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>

    <div id="lewy">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>

    <div id="srodkowy">
        <h2>GALERIA</h2>
        <!-- skrypt 1 -->
        <?php
            $db = mysqli_connect('localhost','root','','2020_egzamin3');
            $query2 = "SELECT nazwaPliku, podpis FROM `zdjecia` ORDER BY podpis ASC;";
            $wynik2 = mysqli_query($db, $query2);
            // dane z każdego zwróconego zapytania wiersza wykorzystywane do wyświetlenia 
            // kolejnych obrazów, w ten sposób, że pole nazwaPliku = źródło obrazu
            // pole "podpis" - tekst alternatywny obrazu
            while($wiersz = mysqli_fetch_row($wynik2)){
                echo "<img src='$wiersz[0]' alt='$wiersz[1]' </img>";
            }

        //   
// while($wiersz = mysqli_fetch_row($wynik2)){
    // echo "<img src='$wiersz[0]' alt = '$wiersz[1]' </img>";
// }

            
        ?>
    </div>

    <div id="prawy">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <td>Jesień</td>
                <td>Grupa 4+</td>
                <td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
    </div>

    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>
        <!-- skrypt 2 -->
        <?php
        $query1 ="SELECT id, dataWyjazdu, cel, cena  FROM `wycieczki` WHERE dostepna=1;";
        $wynik1 = mysqli_query($db, $query1);
        while($wiersz = mysqli_fetch_row($wynik1)){
            echo "<br>$wiersz[0]. $wiersz[1], $wiersz[2], cena: $wiersz[3]";
        }

        mysqli_close($db);
        ?>
    </div>

    <footer>
        <p>Stronę wykonał: PESEL</p>
    </footer>
</body>
</html>
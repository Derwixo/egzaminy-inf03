<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Odloty samolotów</title>
        <link rel="stylesheet" href="styl6.css">
    </head>
    <body>
        <div id="baner1">
            <h2>Odloty z lotniska</h2>
        </div>

        <div id="baner2">
            <img src="zad6.png" alt="logotyp">
        </div>

        <main>
            <h4>tabela odlotów</h4>
            <table>
                <tr>
                    <th>lp.</th>
                    <th>numer rejsu</th>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>status</th>
                </tr>
                <?php
                    // Skrypt #1
                    $db = mysqli_connect('localhost','root','','airport');
                    $query1 = "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC";
                    $wynik = mysqli_query($db, $query1);
                    while($wiersz = mysqli_fetch_row($wynik)){
                        echo "<tr>";

                        echo "<td>";
                        echo $wiersz[0];
                        echo "</td>";

                        echo "<td>".$wiersz[1]."</td>";
                        echo "<td>".$wiersz[2]."</td>";
                        echo "<td>".$wiersz[3]."</td>";
                        echo "<td>".$wiersz[4]."</td>";

                        echo "<tr>";
                    }
                    mysqli_close($db);
                ?>
            </table>
        </main>

        <div id="stopka1">
            <a href="kw1.jpg">Pobierz obraz</a>
        </div>

        <div id="stopka2">
        <?php
            // Skrypt #2
            if(isset($_COOKIE['visited'])){
                echo "<p><b>Miło nam, że znowu nas odwiedziłeś</p></b>";
            }
            else {
                echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</p></i>";
                setcookie('visited','true', time() + 3600);
            }
        ?>
        </div>

        <div id="stopka3">
            Autor: PESEL
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port lotniczy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div id="baner1">
        <img src="zad5.png" alt="logo lotnisko">
    </div>
    <div id="baner2">
        <h1>Przyloty</h1>
    </div>
    <div id="baner3">
        <h3>przydatne linki</h3>
        <a href="kwerendy.txt">Pobierz</a>
    </div>
    <main>
        <table>
            <th>Czas</th>
            <th>Kierunek</th>
            <th>Numer rejsu</th>
            <th>Status</th>
            <!-- skrypt 1 -->
            <?php
           $db = mysqli_connect('localhost','root','','samoloty');
           $query1 = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC";
           $wynik1 = mysqli_query($db, $query1);
           while($wiersz = mysqli_fetch_row($wynik1)){
            echo "<tr>";

            echo "<td>";
            echo $wiersz[0];
            echo "</td>";
        
            echo "<td>".$wiersz[1]."</td>";
            echo "<td>".$wiersz[2]."</td>";
            echo "<td>".$wiersz[3]."</td>";

            echo "</tr>";
           }

           mysqli_close($db);

        ?>
        </table>
    </main>
    <div id="footer1">
        <!-- skrypt 2 -->
       <?php
            if(isset($_COOKIE['visited'])){
                echo "<p><i>Witaj ponownie na stronie lotniska</p></i>";
            }
            else {
                echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</p></b>";
                setcookie('visited','true', time() + 7200);
            }
       ?>
    </div>
    <div id="footer2">
        Autor: PESEL
    </div>
</body>
</html>

<!-- 

th pogrubia
td to zwykła komórka
 -->
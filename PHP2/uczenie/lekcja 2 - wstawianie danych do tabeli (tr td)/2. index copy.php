<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Port Lotniczy</title>
        <link rel="stylesheet" href="styl5.css">
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
            <a href="kwerendy.txt">Pobierz...</a>
        </div>

        <main>
            <table>
                <tr>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>numer rejsu</th>
                    <th>status</th>
                </tr>
                <?php
                    
                ?>
            </table>
        </main>

        <div id="stopka1">
        <?php
            // Skrypt #2
      


          
        ?>
        </div>

        <div id="stopka2">
            Autor: <a href="https://ee-informatyk.pl/" target="_blank" style="color: unset;text-decoration: none;">EE-Informatyk.pl</a>
        </div>
    </body>
</html>


<!-- 
//1. Krótsza alternatywa w pętli while:
         echo "<tr>";
            echo "<td>".$wiersz[0]."</td>";
            echo "<td>".$wiersz[1]."</td>";
            echo "<td>".$wiersz[2]."</td>";
            echo "<td>".$wiersz[3]."</td>";

        echo "</tr>";     

//2. Dłuższa droga:

echo "<tr>";
                    echo "<td>";
                    echo $wiersz[0];
                    echo "</td>";

                    echo "<td>";
                    echo $wiersz[1];
                    echo "</td>";

                    echo "<td>";
                    echo $wiersz[2];
                    echo "</td>";

                    echo "<td>";
                    echo $wiersz[3];
                    echo "</td>";

                    echo "</tr>";    
                    
                    
//1. skrypt 1

 $db = mysqli_connect('localhost','root','','samoloty');
                     $query = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC";
                     $wynik = mysqli_query($db, $query);
                     while($wiersz = mysqli_fetch_row($wynik)){
                      echo "<tr>";
      
                      echo "<td>";
                      echo $wiersz[0];
                      echo "</td>";
      
                      echo "<td>".$wiersz[1]."</td>";
                      echo "<td>".$wiersz[2]."</td>";
                      echo "<td>".$wiersz[3]."</td>";
      
                      echo "<tr>";
      
      
                     }
                     mysqli_close($db);

//2. Ciasteczka

  if(isset($_COOKIE['visited'])){
                echo "<i>Witaj ponownie</i>";
            }
            else {
                echo "<b>Dzień dobry! Strona lotniska używa ciasteczek</b>";
                setcookie('visited', "true", time() + 7200);
            }



 -->
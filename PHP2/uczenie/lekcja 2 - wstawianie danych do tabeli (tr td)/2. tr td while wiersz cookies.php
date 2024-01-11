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
        <h3>Przydatne linki</h3>
        <a href="kwerendy.txt">Pobierz...</a>
    </div>

    <main>

    <table>
        <th>czas</th>
        <th>kierunek</th>
        <th>numer rejsu</th>
        <th>status</th>

        <!-- skrypt 1 -->
        <?php
            $db = mysqli_connect('localhost', 'root','','samoloty');
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


    <div id="stopka1">
        <!-- skrypt 2 -->
       <?php
           if(isset($_COOKIE['visited'])){
            echo "<p><i>Witaj ponownie na stronie lotniska</p></i>";
           }
           else {
            echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</p></b>";
            setcookie('visited', 'true', time() + 7200);
           }

        ?>
 
          
        
    </div>
    <div id="stopka2">
        Autor: PESEL
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

//3. Cookies (między stopkami)

            if(isset($_COOKIE['visited'])){
                echo "<p>Witamy ponownie na stronie lotniska</p>";
            }
            else {
                echo "<p>Witamy po raz pierwszy na stronie lotniska</p>";
                setcookie('visited', 'true', time() + 122);
            }


 -->
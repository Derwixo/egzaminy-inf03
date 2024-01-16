<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    
    <div id="baner1">
    <img src="logo1.png" alt="Mój kalendarz">
    </div>

    <div id="baner2">
    <h1>KALENDARZ</h1>
    <!-- skrypt 1 -->
        <?php






            $db = mysqli_connect('localhost','root','','egzamin5');
            

            $query1 = "SELECT miesiac, rok FROM `zadania` WHERE dataZadania = '2020-07-01';";
            $wynik1 = mysqli_query($db, $query1);
            while($wiersz = mysqli_fetch_row($wynik1)){
                echo "<h3>miesiąć: $wiersz[0], rok: $wiersz[1]</h3>";
            }

            
           
        ?>
    </div>

    <main>
        <!-- skrypt 2 -->
        <?php
         
            $query2 = "SELECT dataZadania, wpis FROM `zadania` WHERE miesiac = 'lipiec';";
            $wynik2 = mysqli_query($db, $query2);
            while($wiersz = mysqli_fetch_row($wynik2)){
                echo "<div class='dzien'
                    <h5>$wiersz[0]</h5>
                    <p>$wiersz[1]</p>
                </div>";
            }
            

            
        ?>
    </main>

    <footer>
        <form action="kalendarz_kopia.php" method="post">
            dodaj wpis:
            <input type="text" name="wpis">
            <input type="submit" value="DODAJ">
            <p>Stronę wykonał: PESEL</p>
            <?php
           
         $db = mysqli_connect('localhost','root','','egzamin5');
         $wpis = $_POST['wpis'];
         $query4 = "UPDATE zadania SET wpis ='$wpis' WHERE dataZadania = '2020-07-13';";
         $wynik4 = mysqli_query($db, $query4);
             
         mysqli_close($db);
            ?>
        </form>
    </footer>

</body>
</html>
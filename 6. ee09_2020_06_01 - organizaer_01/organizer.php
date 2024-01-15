<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    
    <div id="baner1">
        <h2>MÓJ ORGANIZER</h2>
    </div>

    <div id="baner2">
        <form action="organizer.php" method="post">
            Wpis wydarzenia:
            <input type="text" name="wpis">
            <input type="submit" value="ZAPISZ">
        </form>
    
    </div>

    <div id="baner3">
        <img src="logo2.png" alt="Mój organizer">
    </div>

    <main>
        <!-- skrypt 1 -->
        <?php
            $db = mysqli_connect('localhost','root','','2020_egzamin6');
            $wpis = $_POST['wpis'];
            // edytuj wartość "wpis"
            $query4 = "UPDATE zadania set wpis ='$wpis' WHERE dataZadania = '2020-08-27';";
            $wynik4 = mysqli_query($db, $query4);

            $query1 = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'sierpien';";
            $wynik1 = mysqli_query($db, $query1);
            // definiuje blok, a w nim wyświetla dane przesłane skryptem dotyczące 1 wiersza  <div class='dzien'> </div>;
            while($wiersz = mysqli_fetch_row($wynik1)){
                echo "<div class='dzien'>
                    <h6>$wiersz[0], $wiersz[1]</h6> 
                    <p>$wiersz[2]</p>
                </div>";
            }

        ?>
    </main>

    <footer>
        <!-- skrypt 2 -->
    <?php
        $query2 = " SELECT miesiac, rok FROM `zadania` WHERE dataZadania = '2020-08-01';";
        $wynik2 = mysqli_query($db, $query2);
        while($wiersz = mysqli_fetch_row($wynik2)){
            echo "<h1>miesiąc: $wiersz[0], rok: $wiersz[1]</h1>";
        }
        mysqli_close($db);




     
        ?>

        <p>Stronę wykonał: PESEL</p>
    </footer>


</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

    <header>
        <h1>W naszej hurtowni kupisz najtaniej</h1>
    </header>

    <div id="lewy">
        <h3>Ceny wybranych artykułów w hurtowni</h3>
       
            <!-- skrypt 1 -->
            <table>
            <?php
                $db = mysqli_connect('localhost', 'root', '', '2019_sklep2');
                $query1 = "SELECT nazwa, cena FROM towary LIMIT 4;";
                $wynik1 = mysqli_query($db, $query1);
                while($wiersz = mysqli_fetch_row($wynik1)){
                    echo "<tr><td>$wiersz[0]</td><td>$wiersz[1] zł</td></tr>";
                }

            
            ?>
       </table>
    </div>
   

    <div id="srodkowy">
        <h3>Ile będą kosztować Twoje zakupy?</h3>
        <form action="index.php" method="post">
            wybierz artykuł:
            <!-- lista rozwijana   select:          option:-->
            <select name="lista">
                <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                <option value="Cyrkiel">Cyrkiel</option>
                <option value="Linijka 30cm">Linijka 30cm</option>
                <option value="Ekierka">Ekierka</option>
                <option value="Linijka 50cm">Linijka 50cm</option>
            </select><br>
            liczba sztuk:
            <input type="number" name="sztuki" value='1'><br>
            <input type="button" value="OBLICZ">
            <!-- skrypt 2 -->
            <?php
            if(!empty($_POST['lista']) && !empty($_POST['liczba'])) {
            $lista = $_POST['lista'];
            $sztuki = $_POST['sztuki'];
            $query2 = "SELECT cena FROM towary WHERE nazwa = 'cyrkiel';";
            $wynik2 = mysqli_query($db, $query2);
            $wiersz = mysqli_fetch_row($wynik2);
            $cena = ROUND($wiersz[0] * $liczba, 2);
            echo "$cena";
            }
            mysqli_close($db);
            ?>
            
        </form>
    </div>

    <div id="prawy">
        <img src="zakupy2.png" alt="hurtownia">
        <h3>Kontakt</h3>
        <p>
           telefon:<br> 
           111222333<br> 
           e-mail: <br> 
           <a href="mailto:hurt@wp.pl">hurt@wp.pl</a>
        </p>
    </div>
  

    <footer>
        <h4>Stronę wykonał: PESEL</h4>
    </footer>
</body>
</html>
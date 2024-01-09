<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style_1.css">
</head>
<body>
    <header>
<h1>Biblioteka w Książkowicach Małych”</h1>
    </header>
    <div id="lewy">
        <h4>Dodaj czytelnika</h4>
        <form action="biblioteka.php" method="post">
            imie:
            <input type="text" name="imie" id=""><br>
            nazwisko:
            <input type="text" name="nazwisko" id=""><br>
            symbol:
            <input type="number" name="symbol" id=""><br>
            <input type="submit" value="AKCEPTUJ">
            <!-- skrypt 1 -->
    
            <?php
                $db = mysqli_connect('localhost','root','','biblioteka');
                if($_POST){
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $symbol = $_POST['symbol'];
                $query1 = "INSERT INTO `czytelnicy` (`id`, `imie`, `nazwisko`, `kod`) VALUES (NULL, '$imie', '$nazwisko', '$symbol')";
                $wynik = mysqli_query($db, $query1);
                if($wynik){
                    echo "Dodano czytelnika $imie $nazwisko";
                }
            }
            ?>

        </form>
    </div>
    <div id="srodkowy">
        <img src="biblioteka.png" alt="biblioteka">
        <h6>ul. Czytelników 15; <br>Książkowice Małe</h6>
        <p><a href="mailto:biuro@bib.pl"> Czy masz jakieś uwagi?</a></p>



        
    </div>
    <div id="prawy">
        <h4>Nasi czytelnicy</h4>

    <ol>
            <?php
            $query2 = "SELECT `imie`, `nazwisko` FROM `czytelnicy` ORDER BY `nazwisko` ASC";
            $wynik2 = mysqli_query($db, $query2);
            while($wiersz = mysqli_fetch_row($wynik2)){
                echo "<li>$wiersz[0] $wiersz[1]</li>";
            }

            mysqli_close($db);
            ?>
    </ol>


    </div>
    <footer>
    <p>Projekt witryny: PESEL</p>
    </footer>
</body>
</html>


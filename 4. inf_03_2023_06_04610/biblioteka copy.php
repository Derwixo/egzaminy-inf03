<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<header>
    <h1>Biblioteka w Książkowicach Wielkich</h1>
</header>
<div id="lewy">
    <h3>Polecamy dzieła autorów</h3>
    <ol>
        <!-- skrypt 1 -->
    <?php
        $db = mysqli_connect('localhost','root','','biblioteka2');
        $query = "SELECT imie, nazwisko FROM `autorzy` ORDER BY nazwisko ASC";
        $wynik1 = mysqli_query($db, $query);
        //Pobrane zapytaniem imiona i nazwiska autorów wypisywane są jako elementy listy numerowanej (uporządkowanej)
        while($wiersz1 = mysqli_fetch_row($wynik1)){
            echo "<li>$wiersz1[0] $wiersz1[1]</li>";
        }

    ?>

    </ol>


</div>
<div id="srodkowy">
    <h3>ul. Czytelnicza 25, <br>Książkowice Wielkie</h3>
    <p> <a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a> </p>
    <img src="biblioteka.png" alt="książki">
</div>
<div id="prawy1">
    <h3>Dodaj czytelnika</h3>
    <form action="biblioteka.php" method="post">
        imię:
        <input type="text" name="imie" id=""><br>
        nazwisko:
        <input type="text" name="nazwisko" id=""><br>
        symbol:
        <input type="number" name="symbol" id=""><br>
        <input type="submit" value="Dodaj">
    </form>

</div>
<div id="prawy2">
    <!-- skrypt 2 -->
    <?php
    if($_POST){
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $symbol = $_POST['symbol'];

        $query2 = "INSERT INTO `czytelnicy` VALUES (NULL, '$imie', '$nazwisko', '$symbol')";
        $wynik2 = mysqli_query($db, $query2);
        if($wynik2){
            echo "Czytelnik $imie $nazwisko został dodany do bazy danych";
        }
        }
        mysqli_close($db);
    
    
    ?>
</div>



    <footer>
        <p>Projekt strony: PESEL</p>
    </footer>
</body>
</html>
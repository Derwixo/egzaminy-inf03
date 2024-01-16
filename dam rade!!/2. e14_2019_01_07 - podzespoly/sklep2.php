<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    
    <div id="logo">
        <img src="komputer.png" alt="hurtownia komputerowa">
    </div>
    <div id="lista">
        <ul>
            <li>Sprzęt
                <ol>
                    <li>Procesory</li>
                    <li>Pamięć RAM</li>
                    <li>Monitory</li>
                    <li>Obudowy</li>
                    <li>Karty graficzne</li>
                    <li>Dyski twarde</li>
                </ol>
            </li>
            <li>Oprogramowanie</li>
           
        </ul>
    </div>
    <div id="formularz">
        <h2>Hurtownia komputerowa</h2>
        <form action="sklep2.php" method="post">
            Wybierz kategorię sprzętu:
            <input type="number" name="kat">
            <!-- bardzo ważne - przcysik typu submit i nazwa SPRAWDŹ -->
            <input type="submit" value="SPRAWDŹ">
        </form>
    </div>

    <main>
        <h1>Podzespoły we wskazanej kategorii</h1>
        <!-- skrypt 1 -->
        <?php
         $db = mysqli_connect('localhost','root','','2019_sklep');
         $kat = $_POST['kat'];
         //  tutaj modyfikujesz "typy.kategoria" -> "typy.id" | "Procesor" na $kat |
         $q = "SELECT podzespoly.nazwa, podzespoly.opis, podzespoly.cena FROM podzespoly, typy WHERE podzespoly.typy_id = typy.id and typy.id = '$kat';";
         $w = mysqli_query($db, $q);
         while($wiersz = mysqli_fetch_row($w)){
            echo "<p>$wiersz[0] $wiersz[1] CENA: $wiersz[2]</p>";
         }
         mysqli_close($db);
        ?>
    </main>


    <footer>
        <h3>Hurtownia działa od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>00</sup></h3>
        <a href="mailto:bok@hurtownia.pl">Napisz do nas</a>
        Partnerzy:
        <a href="http://intel.pl" target="_blank">Intel</a>
        <a href="http://amd.pl" target="_blank">AMD</a>
        <p>Stronę wykonał: PESEL</p>
    </footer>


</body>
</html>
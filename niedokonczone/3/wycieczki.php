<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
    <h1>Biuro podróży</h1>
    </header>

    <div id="left">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div id="center">
        <h2>Galeria<h2>
        
            <?php
            //skrypt 1
            $db = mysqli_connect('localhost','root','','egzamin4');
            $query1 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC";
            $result = $db->query($query1)    // wykonuje kwerende i zapisuje wynik do zmiennej result | dla obiektu $db->query, której jako parametr zapisuje zapisuję kwerendę
            while($row = $result->fetch_assoc()) {
            $src = $row['nazwaPliku'];
            $alt = $row['podpis'];
            echo "<img src=\"$src\" alt=\"$alt\">";
            }
            ?>

            
    </div>
    <div id="right">
        <h2>PROMOCJE</h2>
      <table>
        <tr>
            <td>Jesień</td>
            <td>Grupa 4+</td>
            <td>Grupa 10+</td>
        </tr>
        <tr>
            <td>5%</td>
            <td>10%</td>
            <td>15%</td>
        </tr>
      </table>
    </div>
    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>

        <?php
        // skrypt 2
        $db = mysqli_connect('localhost','root','','egzamin4');
        $query2 = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1";
        mysqli_close($db);
        ?>

       
    </div>


    <footer>
        <p>Stronę wykonał:00000000000</p>
    </footer>
</body>
</html>


<!-- 
1. Odnośnik do adresu e-mail biuro@wycieczki.pl o treści: „napisz do nas”
a:mail = <a href="mailto:"></a> -> <a href="malito:biuro@wyycieczki.pl">napisz do nas</a>


2. Tabela o trzech kolumnach i dwóch wierszach
tr - wieRsze
td - kolumny

table>tr*2>td*3

3. Jakbyś chciał wykonać kwerendę i zapisać ją do zmiennej result na podstawie:
$db = mysqli_connect('localhost','root','','egzamin4');
            $query1 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC";
            mysqli_query($db, $query1);

$result = $db->query($query1)


 -->
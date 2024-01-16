<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>

        <div id="baner">
            <h1>Forum wielbicieli psów</h1>
        </div>

        <div id="lewy">
            <img src="obraz.jpg" alt="foksterier">
        </div>

        <div id="prawy1">
            <h2>Zapisz się</h2>
            <form action="logowanie copy.php" method="post">
                login:
                <input type="text" name="login"><br>
                hasło:
                <input type="password" name="haslo"><br>
                powtórz hasło:
                <input type="password" name="powhaslo"><br>
                <input type="submit" value="Zapisz">
                </form>
                <!-- skrypt 1 -->
                <?php
                    $db = mysqli_connect('localhost','root','','2022_psy');
                    if(empty($_POST['login']) || empty($_POST['haslo']) || empty($_POST['powhaslo'])){
                        echo "<p>wypełnij wszystkie pola</p>";
                    }
                    else {
                        $login = $_POST['login'];
                        $haslo = $_POST['haslo'];
                        $powhaslo = $_POST['powhaslo'];
                        $query3 = "SELECT login FROM `uzytkownicy` WHERE login LIKE '$login'";
                        $wynik3 = mysqli_query($db, $query3);
                        $wystepowanie = mysqli_num_rows($wynik3);
                        if ($wystepowanie > 0){
                            echo "<p>login występuje w bazie danych, konto nie zostało dodane</p>";
                        }
                        else if ($haslo != $powhaslo){
                            echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
                        }
                        else {
                            $szyfr_hasla = sha1($haslo);
                            $query2 = "INSERT INTO `uzytkownicy3` (`id`, `login`, `haslo`) VALUES (NULL, '$login', '$szyfr_hasla');";
                            $wynik2 = mysqli_query($db, $query2);
                            if($wynik2){
                                echo "<p>Konto zostało dodane</p>";
                            }
                        }
                    }
                
              

                mysqli_close($db);
                ?>
            
        </div>

        <div id="prawy2">
            <h2>Zapraszamy wszystkich</h2>
            <ol>
                <li>właścicieli psów</li>
                <li>weterynarzy</li>
                <li>tych, co chcą kupić psa</li>
                <li>tych, co lubią psy</li>
            </ol>
            <a href="regulamin.html">Preczytaj regulamin forum</a>
        </div>

        <footer>
            Stronę wykonał: PESEL
        </footer>
</body>
</html>
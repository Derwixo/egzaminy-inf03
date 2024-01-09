<?php
    
    echo "Dodano rezerwację do bazy";

    $db = mysqli_connect('localhost','root','','baza');

    if(!empty($data) && !empty($personCount) && !empty($phone)) {
    $date = $_POST['date'];
    $personCount = $_POST['personCount'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '1', '$date', '$personCount', '$phone')";
    mysqli_query($db, $query);
}
    mysqli_close($db);
   

?>

<!-- 
1. Deklaracja danych
2. connect
3. query
4. mysqli query
5. mysqli close


<div id="bottom"> 
        <h2>Zarezerwuj stolik on-line</h2>
        <form method="post" action="rezerwacja.php">
            Data (format rrr-mmm-dd)<br>
            <input type="text" name="date"><br>
            Ile osób? <br>
            <input type="text" name="personCount"><br>
            Twój numer telefonu: <br>
            <input type="number" name="phone"><br>
            <input type="checkbox" name="checkbox" id="">
            Wyrażam zgodę na przetwarzanie danych osobowych<br>
            <input type="reset" value="WYCZYŚĆ">
            <input type="submit" value="REZERWUJ">
        </form>


echo "Dodano rezerwację do bazy";
//1. Deklaracja danych
$date = $_POST['date'];
$personCount = $_POST['personCount'];
$phone = $_POST['phone'];
//2. connect
$db = mysqli_connect('localhost','root','','baza');
//3. query
$query = "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '1', '$date', '$personCount', '$phone')";
//4. mysqli query = łączenie z bazą danych wysyłając zapytanie insert into
mysqli_query($db, $query);
//5. mysqli close = zamknięcie połączenia z serwerem
mysqli_close($db);

 -->
<?php

echo "Dodano rezerwację do bazy";
//1. Deklaracja danych
$date = $_POST['date'];
$personCount = $_POST['personCount'];
$phone = $_POST['phone'];
//2. connect
$db = mysqli_connect('localhost','root','','baza');
//3. query
$query= "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '1', '$date', '$personCount', '$phone')";
//4. mysqli query = łączenie z bazą danych wysyłając zapytanie insert into
mysqli_query($db, $query);
//5. mysqli close = zamknięcie połączenia z serwerem
mysqli_close($db);
?>

<!-- 
1. Deklaracja danych
2. connect
3. query
4. mysqli query
5. mysqli close

 -->
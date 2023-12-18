<?php


echo "Dodano rezerwację do bazy";

$date = $_POST['date'];
$personCount = $_POST['personCount'];
$phone = $_POST['phone'];

$db = mysqli_connect('localhost','root','','baza');

$query =  "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '1', '$date', '$personCount', '$phone')";
mysqli_query($db,$query);

mysqli_close($db);


?>
<!-- 
echo "Dodano rezerwację do bazy"; 
//1. deklaracja zmiennych
$db = mysqli_connect("localhost","root","","baza");

$date = $_POST['date'];
$personCount = $_POST['personCount']
$phone = $_POST['phone'];
//2. Connect

//3. Query
$query = "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) 
            VALUES (NULL, '1', '$date', '$personCount', '$phone');";
//4. mysql query
mysqli_query($db,$query);
//5. zamknięcie połączenia
mysqli_close($db);



1. DEKLARACJA ZMIENNYCH
2. CONNECT
3. QUERY
4. MYSQLI_QUERY
4. CLOSE




 -->
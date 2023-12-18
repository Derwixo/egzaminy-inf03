<?php

echo "Dodano rezerwację do bazy";
//1. Deklaracja zmiennych
$personCount = $_POST['personCount'];
$date = $_POST['date'];
$phone = $_POST['phone'];
//2. Connect
$db = mysqli_connect('localhost','root','','baza');
//3. query
$query = "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '1', '$date', '$personCount', '$phone')";
//4. mysqli query
mysqli_query($db,$query);
//5 mysqli close
mysqli_close($db);

?>
<!-- 
<?php
echo "Dodano rezerwację do bazy";

$personCount = $_POST['personCount'];
$date = $_POST['date'];
$phone = $_POST['phone'];

$db = mysqli_connect('localhost','root','','baza');
$query = "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '1', '$date', '$personCount', '$phone')";

mysqli_query($db,$query);

mysqli_close($db);

?>


1. DEKLARACJA ZMIENNYCH
2. CONNECT
3. QUERY
4. MYSQLI_QUERY
4. CLOSE




 -->

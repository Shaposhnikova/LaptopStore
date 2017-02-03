<?php

$mysqli = new mysqli('localhost', 'root', '', 'new_db');

if (mysqli_connect_error()) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

//echo 'Соединение установлено... ' . $mysqli->host_info . "\n";

$mysqli->close();
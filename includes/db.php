<?php
define("DB_HOST", 'localhost');
define("DB_USER", 'root');
define("DB_PASS", 'Mombasa@kenya1');
define("DB_DATABASE", 'webapp');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if (!$connection) {
    die("Connection Failed" . mysqli_connect_error());
}

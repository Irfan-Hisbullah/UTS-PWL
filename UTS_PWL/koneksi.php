<?php

$dsn    = 'mysql:dbname=dbpegawai;host=localhost';
$user   = 'root';
$pwd    = '';

// $dbh = new PDO($dsn, $user, $pwd);

try {
    $dbh = new PDO($dsn, $user, $pwd);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,TRUE);
} catch (PDOException $e) {
    echo 'Gagal Koneksi DB Karena '.$e->getMessage();
}

?>
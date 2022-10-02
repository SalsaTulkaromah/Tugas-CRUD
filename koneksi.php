<?php

$conn = mysqli_connect ("localhost","root","","db_kereta_api");

if (!$conn) {
    echo "Koneksi Gagal";
    die ();
}else {
    echo "Koneksi Berhasil";
}

?>

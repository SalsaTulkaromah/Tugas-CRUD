<?php
include_once ("koneksi.php");
$id=$_GET['id'];
$query="delete from penumpang where id_penumpang=$id";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
}else {
echo "Hapus Data Gagal";
}
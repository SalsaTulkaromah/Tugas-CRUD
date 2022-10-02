<?php
include_once("koneksi.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis= $_POST['jenis'];
$no_hp= $_POST['no_hp'];
$query="UPDATE penumpang SET
    nama_penumpang='$nama',jenis_kelamin='$jenis',no_hp='$no_hp' WHERE id_penumpang=$id";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "Update Data Gagal";
}
?>
<?php
include_once("koneksi.php");
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$no_hp = $_POST['no_hp'];
$query="INSERT INTO penumpang
    (nama_penumpang,jenis_kelamin,no_hp) VALUE
    ('$nama','$jenis','$no_hp')";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "Input Data Gagal";
}
?>
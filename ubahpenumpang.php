<?php
include_once("koneksi.php");
$id=$_GET['id'];
$query="SELECT * FROM penumpang WHERE id_penumpang=".$id;
$hasil=mysqli_query($conn,$query);?><!DOCTYPE html>
<html>
<head>
<title>Ubah Penumpang</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">
<title>Ubah Penumpang</title>
</head>
<body>
<div class="alert alert-success text-center" role="alert" >
<h2>DATA PENUMPANG KERETA API</h2>
</div>
<h1 class="ml-5">Ubah Daftar Penumpang</h1>
<form method="post" action="prosesubahpenumpang.php"class="ml-5">
<?php while ($data=mysqli_fetch_array($hasil)) { ?>
<div class="form-group row">
<label for="nama" class="col-sm-2 col-form-label">Nama Penumpang</label>
<div class="col-sm-3">
<input type="text" name="nama" class="form-control"value="<?php echo $data['nama_penumpang'] ?>" >
</div>
<div class="form-group row">
<label for="jenis" class="col-sm-3 col-formlabel">Jenis Kelamin</label>
<div class="col-sm-5">
<input type="text" name="jenis" class="form-control"value="<?php echo $data['jenis_kelamin'] ?>" >
</div>
</div>
<div class="form-group row">
<label for="no" class="col-sm-3 col-formlabel">No_Hp</label>
<div class="col-sm-1">
<input type="number" name="no_hp" class="formcontrol" value="<?php echo $data['no_hp'] ?>" >
</div>
</div>
<input type="hidden" name="id" value="<?php echo $id ?>" />
<button type="submit" class="btn btn-primary mb-1
mt-1 ml-0 mr-0" >Kirim</button>
<a href="index.php" class="btn btn-primary mb-1 mt-1 
ml0"><i class="fas fa-user-plus mr-0"></i>Daftar Penumpang</a>
</form>
<?php } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
 crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
crossorigin="anonymous"></script>
</body>
</html>
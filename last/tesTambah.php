<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Tambah</title>
</head>
<body > <!-- style="background: linear-gradient(90deg,#00dbde,#ff00ff); ;" -->
  <?php
// echo '<pre>';
// print_r($_SESSION['database']);    
// echo '</pre>';
// echo '<pre>';
// print_r($_SESSION['idHalaman']);    
// echo '</pre>';'
include 'konek.php';
$id = $_GET['id'];
$_SESSION['database'];
$idh = $_SESSION['idHalaman'];
$ambil = $koneksi->query("SELECT halaman FROM tesdata WHERE id='$idh'"); 
$pecah = $ambil->fetch_assoc();
  
 $array = $pecah['halaman'];
// echo '<pre>';
// print_r($array);    
// echo '</pre>';
//  echo '<pre>';
//  print_r($_SESSION['database']);    
//  echo '</pre>';
//  echo '<pre>';
//  print_r($idh);    
//  echo '</pre>';
  ?>
<div style="" class="kotak">
<h1 align="center">Tambah Kolom</h1>
<hr>
<p> <form action="" method="post" enctype="multipart/form-data">
   <b>Pilih File: </b><input type="file" name="NamaFile">
   <br><br>
   <b >Rencana:  </b> <input type="text" name="rencana"  style="margin-left:12px">
   <br> <br>
   <b>Nama: </b><input type="text" value="" name="nama" style="margin-left:29px">
   <br><br>
   <b>Tanggal awal: </b><input type="date" name="tanggal_awal" style="margin-left:18px">
   <br> <br>
   <b >Tanggal akhir: </b><input type="date" name="tanggal_akhir"style="margin-left:18px">
   <br><br>

        <b>Jumlah Pekerja :</b><input type="number" name="jumlahh" placeholder="jumlah" value="1" style="margin-left:20px">
        <br><br><br>
        <a href="tesHalaman.php?id=<?php echo $_SESSION['idHalaman']; ?>" class="btn btn-warning">Kembali</a>             
    <button name="Tambah" class="btn btn-success" style="margin-left:20%">Selesai</button>
  </form></p> 
    <br> <br>

  <br> <br>
</div>
<!-- gambar -->
<?php 
 //   include '../konek.php';
//    if(isset($_POST['prosess]'])){
         // ambil data file
//    $direktori = "../file/";
 //   $file_name = $_FILES['NamaFile']['name'];
 //   move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

  //  mysqli_query($koneksi,"insert into input1 set data='$file_name' ");
 // echo '<b>File berhasil diupload</b>';
 //   }
?>

<!-- tambah -->
<?php 
  error_reporting(0);
   include 'konek.php';
  
    $tgl_awal = $_POST['tanggal_awal'];
    $tgl_akhir = $_POST['tanggal_akhir'];
    $jumlah = $_POST['jumlahh'];
    $nama = $_POST['nama'];
    $rencana = $_POST['rencana'];

    if(isset($_POST['Tambah'])){
      $direktori = "file/";
      $file_name = $_FILES['NamaFile']['name'];
      move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

    mysqli_query($koneksi,"INSERT INTO $array 
    VALUES ('','$file_name','$tgl_awal','$tgl_akhir','$jumlah','$nama',' $rencana')");
     echo '<script>alert("selesai")</script>';
     header("location:tesHalaman.php?id=$idh");
    }else{
     
    }
    ?>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
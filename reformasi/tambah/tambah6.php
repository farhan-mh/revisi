<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tambah</title>
</head>
<body style="background: linear-gradient(90deg,#00dbde,#ff00ff); ;">
  
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
        <a href="../halaman6.php" class="btn btn-warning">kembali</a>             
    <button name="Tambah" class="btn btn-success" style="margin-left:20%">SELESAI</button>
  </form></p> 
    <br> <br>

  <form action="" method="post">
<!-- ? -->
  </form>
  <br> <br>
</div>
<?php 
 error_reporting(0);
   include '../konek.php';
   
    $tgl_awal = $_POST['tanggal_awal'];
    $tgl_akhir = $_POST['tanggal_akhir'];
      $jumlah = $_POST['jumlahh'];
    $nama = $_POST['nama'];
    $rencana = $_POST['rencana'];

    if(isset($_POST['Tambah'])){
      $direktori = "../file/";
      $file_name = $_FILES['NamaFile']['name'];
      move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

    mysqli_query($koneksi,"INSERT INTO input6 
    VALUES ('','$file_name','$tgl_awal','$tgl_akhir','$jumlah','$nama',' $rencana')");
     echo '<script>alert("selesai")</script>';
     echo '<script>location="../halaman6.php"</script>';
    }else{
     
    }
    ?>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
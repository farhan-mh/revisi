<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit</title>
</head>
<body>

  <div class="kotak">
<?php
//  echo $array = $pecah['halaman'];  //di ubah ke array
 include 'konek.php';
 
 $id = $_GET['id'];
 $_SESSION['database'];
 $idh = $_SESSION['idHalaman'];

 $ambil = $koneksi->query("SELECT halaman FROM tesdata WHERE id='$idh'"); 
 $pecah = $ambil->fetch_assoc();
   
 $array = $pecah['halaman'];
//  echo '<pre>';
// print_r($array);    
// echo '</pre>';
//   echo '<pre>';
//   print_r($_SESSION['database']);    
//   echo '</pre>';
//   echo '<pre>';
//   print_r($idh);    
//   echo '</pre>';

$ambilData = mysqli_query($koneksi,"SELECT * FROM $array WHERE id ='$id' ");
   while ($tampil = mysqli_fetch_array($ambilData)){
  ?>
  <h1 align="center">Edit Kolom</h1>
  <hr>
<p> <form action="" method="post" enctype="multipart/form-data">
    <b> Pilih File: </b><input type="file" name="NamaFile">
  <?php // $file_name = $_FILES['NamaFile']['name'];  ?>
   <br> <br>
   <b>Rencana: </b><input type="text" name="rencana" value="<?php echo $tampil['rencana'] ?>"  style="margin-left:12px">
    <br><br>
   <b>Nama: </b><input type="text" value="<?php echo $tampil['nama'] ?>" name="nama"   style="margin-left:29px">
   <br><br>
   <b >Tanggal awal: </b><input type="date" name="tanggal_awal" value="<?php echo $tampil['tanggal_awal'] ?>" style="margin-left:18px">
   <br> <br>
   <b >Tanggal akhir: </b><input type="date" name="tanggal_akhir" value="<?php echo $tampil['tanggal_akhir'] ?>" style="margin-left:18px">
   <br><br>
     <input type="hidden" name="id" value="<?php echo $tampil["id"]; ?>"> 

   <b>Jumlah Pekerja : </b><input type="number" name="jumlah" placeholder="jumlah" value="<?php echo $tampil['jumlah'] ?>"style="margin-left:22px">
   <br><br><br>
   <a href="tesHalaman.php?id=<?php echo $_SESSION['idHalaman']; ?>" class="btn btn-warning">Kembali</a>
   <b><!-- <input type="submit" value="SIMPAN" class="btn btn-success"  style="margin-left:20%"></b> -->
   <button type="submit" value="SIMPAN" name="SIMPAN" class="btn btn-success"  style="margin-left:20%">Simpan</button>
   
  </form></p> 
    <br> <br>
   
  
  <?php } ?>

  <br> <br>

</div>


<?php 
error_reporting(0);
   include 'konek.php';
    $id = $_POST['id'];

    $tgl_awal = $_POST['tanggal_awal'];
    $tgl_akhir = $_POST['tanggal_akhir'];
    $jumlah = $_POST ['jumlah'];
    $nama = $_POST['nama'];
    $rencana = $_POST['rencana'];
 
    

    echo '<pre>';
    print_r($data);    
    echo '</pre>';    

   if(isset($_POST['SIMPAN'])){
    $direktori = "file/";
    $file_name = $_FILES['NamaFile']['name'];
    move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

        mysqli_query($koneksi," UPDATE `$array` SET `data` = '$file_name', `tanggal_awal` = '$tgl_awal',
       `tanggal_akhir` = '$tgl_akhir', `jumlah` = '$jumlah', `nama` = '$nama' , `rencana` = '$rencana' 
        WHERE `$array`.`id` = '$id' ");
 
        echo '<script>alert="selesai di update"</script>';
        header("location:tesHalaman.php?id=$idh");
    //   UPDATE `tesinput` SET `jumlah` = '4' WHERE `tesinput`.`id` = 45; UPDATE `tesinput` SET `jumlah` = '1' 
    //   WHERE `tesinput`.`id` = 46; UPDATE `tesinput` SET `jumlah` = '2' WHERE `tesinput`.`id` = 48; UPDATE `tesinput` SET `jumlah` = '3'
    //  WHERE `tesinput`.`id` = 49;
 
   }
    ?>
<script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
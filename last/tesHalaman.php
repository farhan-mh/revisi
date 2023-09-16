<?php
session_start();
include 'konek.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script>
      function AutoRefresh(t){
        setTimeout("location.reload(true);",t);
        document.getElement("refresh_satus").innerPHP="Refresh Done";
      }
    </script>
    <title>Rencana Aksi</title>
</head>
<body>
  
    <section class="konten">
   <div class="container" style="margin-top:10% ;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Rencana</th>
                <th>Lama Waktu Pelaksanaan</th>
                <th>Output</th>
                <th>Hapus</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            
        <?php   
               include 'konek.php';
               $id = $_GET['id'];
                 // Select halaman from tesdata where id=1;
                //   $ambil = $koneksi->query("SELECT halaman FROM tesdata WHERE id=$id");
                //   $ambil = mysqli_query($koneksi,"SELECT * FROM tesdata WHERE id = $id");
                $ambil = $koneksi->query("SELECT halaman FROM tesdata WHERE id='$id'"); 
                $pecah = $ambil->fetch_assoc();
                $_SESSION['database']=$pecah;
                $_SESSION['idHalaman'] = $id;  

                // echo '<pre>';
                // print_r($id);    
                // echo '</pre>';

                // echo '<pre>';
                // print_r($pecah);    
                // echo '</pre>';

                // echo '<pre>';
                // print_r($_SESSION['database']); 

                // echo $_SESSION['idHalaman'] = $id;
                
                // print_r($_SESSION['idHalaman']);    
                // echo '</pre>';
                

                echo $array = $pecah['halaman'];  //di ubah ke array 
        //   $ambil2 = 'input1';
                 //SELECT * FROM `tesdata` WHERE 1
                  $no =1;
                  $ambilData = mysqli_query($koneksi,"SELECT * FROM $array ");  // <- harus array
                  while ($tampil = mysqli_fetch_array($ambilData)){
                  ?>
                  
                   <?php $id = $tampil['id'] ?>
            <tr value="<?php echo $id ?>">
                       
                <td><?php echo $no  ?></td>
                <td>
                <?php echo $tampil['rencana']; ?>
                </td>
                <td> <?php echo $tampil['tanggal_awal'] ?> <b> Sampai  </b> <?php echo $tampil['tanggal_akhir'] ?></td>
                 <td><a href="file/<?php echo $tampil['data'] ?>"><? $id ?> <?php echo $tampil['data']  ?> </a></td>
            <form action="tesHapus.php" method="post">
                <td><a href="tesHapus.php?id=<?php echo $tampil['id']?>" class="btn btn-danger" value="Hapus" name="Hapus">Hapus</a></td>
            </form>
            <form action="tesEdit.php" method="post">
                <td><a href="tesEdit.php?id=<?php echo $tampil['id']?>" class="btn btn-success">Edit</a></td>
            </form>
            </tr>
       <!-- 2 -->
       <?php $no++?>
       <?php  }?>
        </tbody>
    </table>
    <a href="tesHome.php" class="btn btn-warning" style="float:left">Kembali</a>
    <form action="" method="post">     
        <a href="tesTambah.php?id=<?php echo $pecah['halaman']; ?>" class="btn btn-primary"  style="margin-left:9px">Tambah</a>
    </form>
    
   
   <!-- <a href="tesss.php">tes user</a> -->
   
</div>
</section>

<?php 
    
    // if(isset($_POST['prosess'])){
        
    // $direktori = "file/";
    // $file_name = $_FILES['NamaFile']['name'];
    // move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

    // mysqli_query($koneksi,"update input1 set data='$file_name' where id='$id' ");
    
    // }else{
        
    // }
    ?>

<!-- Hapus -->
<?php 
 //   if($_POST['Hapus']){
 //   mysqli_query($koneksi,"DELETE FROM input1 WHERE `id` = $id");
 //   echo "<script>alert('dihapus)</script>";
 //   }else{
        
 //   }
    ?>
<!-- Tambah -->
<?php 
  //  if(isset($_POST['Tambah'])){
  //  mysqli_query($koneksi,"INSERT INTO input1 (id,data,tanggal_awal) 
  //  VALUES ('','','')");
 
  //  }else{
 
  //  }
    ?>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
<?php
error_reporting(0);
session_start();
include 'konek.php'; ?>
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
                <th>output</th>
                <th>Hapus</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                  $no =1;
                  $ambilData = mysqli_query($koneksi,"SELECT * FROM tesinput ");
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
                <input type="hidden" value="tasinput">
                <td><a href="tesHapus.php?id=<?php echo $tampil['id']?>" class="btn btn-danger" value="Hapus" name="Hapus">Hapus</a></td>
            </form>
            <form action="halamman/edit.php" method="post">
                <td><a href="halaman/edit.php?id=<?php echo $tampil['id']?>" class="btn btn-success">Edit</a></td>
            </form>
            </tr>
       <!-- 2 -->
       <?php $no++?>
       <?php  }?>
        </tbody>
    </table>
    <form action="" method="post">
       
        
        <a href="tambah.php?id=<?php echo $tampil['id']?>" class="btn btn-primary">Tambah</a>
    </form>
    <a href="index.php" class="btn btn-warning" style="margin-top:9px">kembali</a>
    <button onclick="Javascript:AutoRefresh()" class="btn btn-success" style="margin-top:9px;margin-left:10px">Refresh</button>
    <a href="tesss.php">tes user</a>
   
</div>
</section>


<!-- Hapus -->
<?php 
    if($_POST['Hapus']){
    mysqli_query($koneksi,"DELETE FROM tesinput WHERE `id` = $id");
    echo "<script>alert('dihapus)</script>";
    }else{
        
    }
    ?>
<!-- Tambah -->
<?php 
    if(isset($_POST['Tambah'])){
    mysqli_query($koneksi,"INSERT INTO tesinput (id,data,tanggal_awal) 
    VALUES ('','','')");
 
    }else{
 
    }
    ?>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
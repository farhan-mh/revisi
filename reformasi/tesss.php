<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


    <section class="konten">
      <div class="container">
        <table class="table table-bordered"style="margin-top:10% ;">
            <thead>
                <tr>
                <th>no</th>
                <th>Rencana</th>
                <th>lama waktu</th>
                <th>Output</th>
                <th>Nama</th>
                <th>jumlah</th>
            </tr>
            </thead>
            <tbody>
                
            <?php 
    include 'konek.php';
    $no=1;
    $ambilData = mysqli_query($koneksi,"SELECT * FROM tesinput  ");

    while ($tampil = mysqli_fetch_array($ambilData)){
            
    ?>
                <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $tampil['rencana'] ?></td>
                <td><?php  echo $tampil['tanggal_awal']?> <b>Sampai</b> <?php echo $tampil['tanggal_akhir'] ?>  <b></td>            
               <td><a href="file/<?php echo $tampil['data']?>"><?php echo $tampil['data'] ?></a></td>
                <td><?php echo $tampil['nama'] ?></td>
                  <td><?php echo $tampil['jumlah'] ?></td>
            </tr>
            <?php $no++ ?>
            <?php  }?>
            </tbody>
            
        </table>
      </div>
    </section>
    <a href="m.php" style="margin-left:12%" class="btn btn-warning">Kembali</a>

    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
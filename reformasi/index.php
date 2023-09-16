<?php 
session_start();
include 'konek.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Pelaksanan Reformasi Birokrasi</title>
</head>
<body style="background-color: rgb(248,248,248);">
 <!-- style="background: url('img/download (3).png');background-size:cover;" -->
<form action="" method="get"></form>
<div class="judul" align="center" style="background: rgb(105,101,223);
background: linear-gradient(90deg, rgba(105,101,223,1) 0%, rgba(151,147,200,0.9626225490196079) 12%, rgba(0,212,255,1) 95%); ">
    <h1><b>P</b>elaksanaan <b>R</b>eformasi  <b>B</b>irokrasi</h1>
    </div>
    <br>
    
    <h3 align="center" style="margin:50px"> <b style="color:blue">8</b> AREA PERUBAHAN</h3>

  <!--  <form action="" >  -->
        <div class="container text-center" >
            <div class="row" >
            <?php 
$ambilData = mysqli_query($koneksi,"SELECT * FROM data ");
while ($tampil = mysqli_fetch_array($ambilData)){
?>
                <div class="col-md-3" style="margin-bottom:50px">
                    <p><?php echo $tampil["nama"] ?></p>
                    <div class="box">
                        <img src="img/<?php echo $tampil["img"]  ?>"  class="gambar" alt="">
                        <br>
                        <a href="<?php echo $tampil ["halaman"]; ?>" class="button">RENCANA AKSI</a>
                       </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </form>
    <a href="m.php">tes</a>
    <?php include 'komponen/footer.php' ?>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
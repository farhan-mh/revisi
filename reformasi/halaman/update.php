<?php 
error_reporting();
   include '../konek.php';
    $id = $_POST['id'];
 
    $tgl_awal = $_POST['tanggal_awal'];
    $tgl_akhir = $_POST['tanggal_akhir'];
    $jumlah = $_POST ['jumlah'];
    $nama = $_POST['nama'];
    $rencana = $_POST['rencana'];

    $direktori = "../file/";
    $file_name = $_FILES['NamaFile']['name'];
    move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);
    
        mysqli_query($koneksi," UPDATE `tesinput` SET `data` = '$file_name', `tanggal_awal` = '$tgl_awal',
       `tanggal_akhir` = '$tgl_akhir', `jumlah` = '$jumlah', `nama` = '$nama' , `rencana` = '$rencana' 
        WHERE `tesinput`.`id` = '$id' ");

header("location:../m.php?pesan=update");
    //   UPDATE `tesinput` SET `jumlah` = '4' WHERE `tesinput`.`id` = 45; UPDATE `tesinput` SET `jumlah` = '1' 
    //   WHERE `tesinput`.`id` = 46; UPDATE `tesinput` SET `jumlah` = '2' WHERE `tesinput`.`id` = 48; UPDATE `tesinput` SET `jumlah` = '3'
    //  WHERE `tesinput`.`id` = 49;
    
    ?>
<?php 
session_start();
include '../konek.php';

$id = $_GET['id'];

    
    mysqli_query($koneksi,"DELETE FROM input4 WHERE `id` = $id");
    echo "<script>location='../halaman4.php'</script>";
    ?>
<?php 
session_start();
include '../konek.php';

$id = $_GET['id'];

    
    mysqli_query($koneksi,"DELETE FROM input8 WHERE `id` = $id");
    echo "<script>location='../halaman8.php'</script>";
    ?>
<?php 
session_start();
include '../konek.php';

$id = $_GET['id'];

    
    mysqli_query($koneksi,"DELETE FROM input7 WHERE `id` = $id");
    echo "<script>location='../halaman6.php'</script>";
    ?>
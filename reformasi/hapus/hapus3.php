<?php 
session_start();
include '../konek.php';

$id = $_GET['id'];

    
    mysqli_query($koneksi,"DELETE FROM input3 WHERE `id` = $id");
    echo "<script>location='../halaman3.php'</script>";
    ?>
<?php 
session_start();
include '../konek.php';

$id = $_GET['id'];

    
    mysqli_query($koneksi,"DELETE FROM input5 WHERE `id` = $id");
    echo "<script>location='../halaman5.php'</script>";
    ?>
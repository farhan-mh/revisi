<?php 
session_start();
include '../konek.php';

$id = $_GET['id'];

    
    mysqli_query($koneksi,"DELETE FROM input1 WHERE `id` = $id");
    echo "<script>location='../halaman1.php'</script>";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload='goBack()'>
<?php 
session_start();
include 'konek.php';

$id = $_GET['id'];
// $ambil = $koneksi->query("SELECT halaman FROM tesdata WHERE id='$id'"); 
// $tabel = $ambil->fetch_assoc();
// SESSION
// echo '<pre>';
// print_r($_SESSION['database']);    
// echo '</pre>';
$s = $_SESSION['database'];
    $tabel= $s ['halaman'];
    mysqli_query($koneksi,"DELETE FROM $tabel WHERE `id` = $id");
    echo "<script></script>";
    ?>
    <script>
        function goBack() {
            window.history.back(1);    
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form action="" method="post" enctype="multipart/form-data">
      Pilih File: <input type="file" name="NamaFile">
      <input type="submit" name="proses" value="upload">
    </form>

    <?php 
    include 'konek.php';
    if(isset($_POST['proses'])){
         // ambil data file
    $direktori = "file/";
    $file_name = $_FILES['NamaFile']['name'];
    move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

    mysqli_query($koneksi,"insert into inputan2 set data='$file_name' ");
    echo '<b>File berhasil diupload</b>';
    }
    ?>
</body>
</html>
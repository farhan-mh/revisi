<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>ADMIN</title>
</head>
<body>
   <!--  background-color: rgb(248, 248, 248); -->
    <table>
        <thead>
            <tr>
            <th>Edit nama</th>
            <th>Edit tanggal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <form action="" method="post">
            <td><input type="text" value="a"></td>
            <td><input type="date" value="d"></td>
            </tr>
            
            <tr>
            <td><button class="btn btn-success">SELESAI</button></td>
            </tr>
            </form>
        </tbody>
    </table>
   
  
    <?php
       include '';

       $koneksi->query("INSERT INTO data (nama,tgl) VALUES ('nama','tgl')");
     ?>
     <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
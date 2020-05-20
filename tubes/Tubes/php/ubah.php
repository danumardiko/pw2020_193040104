<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/ubah.css">
</head>
<body>
<div class="container">
<h3> Form Ubah Data</h3>
<form action="" method="post">
<input type= "hidden" name="id" value="<?= $row['id']; ?>">


        <label for="nama"><b>Nama:</label><br>
        <input type="text" name="nama" id="nama" required value="<?= $row ['nama'];?>"  ><br><br<>

        <label for="img"><b>Gambar:</label><br>
        <input type="text" name="img" id="img"  required value="<?= $row ['img'];?>" ><br><br<>
    

        <label for="jenisalatmusik"><b>Jenis alat musik:</label><br>
        <input type="text" name="jenis alatmusik" id="jenisalatmusik"  required value="<?= $row ['jenisalatmusik'];?>" ><br><br<>
  

        <label for="asal"><b>Asal:</label><br>
        <input type="text" name="asal" id="asal" required value="<?= $row ['asal'];?>" ><br><br<>
   
        <label for="harga"><b>Harga:</label><br>
        <input type="text" name="harga" id="harga"  required value="<?= $row [''];?>" ><br><br<>

    <br>
    <button type="submit" name="ubah"><b>Ubah Data</button>
    <button type="submit">
        <a href="../index.php" style=" text decoration:none; color:black;">Kembali</a>
    </button>
</ul> 
</div>           
</body>
</html>

<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
    exit;
}

require 'functions.php';
$id = $_GET['id'];
$row = query("SELECT * FROM tubes_193040104 WHERE id = $id")[0];
    if(isset($_POST['ubah'])){
        if(ubah($_POST) > 0){
            echo "<script>
                        alert('Data Berhasil diubah')
                        document.location.href = 'admin.php';
                   </script>";

        } else {
            echo "<script> 
                        alert('Data Gagal diubah')
                        document.location.href = 'admin.php';
                 </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> Form Ubah Data</h3>
<form action="" method="post">
<input type= "hidden" name="id" value="<?= $row['id']; ?>">
<ul>
    <li>
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required value="<?= $row ['nama'];?>"  ><br><br<>
    </li>
    <li>
        <label for="img">gambar:</label><br>
        <input type="text" name="img" id="img"  required value="<?= $row ['img'];?>" ><br><br<>
    </li>
    <li>
        <label for="jenisalatmusik">Jenis alat musik:</label><br>
        <input type="text" name="jenis alatmusik" id="jenisalatmusik"  required value="<?= $row ['jenisalatmusik'];?>" ><br><br<>
    </li>    
    <li>
        <label for="asal">Asal:</label><br>
        <input type="text" name="asal" id="asal" required value="<?= $row ['asal'];?>" ><br><br<>
    </li>    
    <li>
        <label for="harga">Harga:</label><br>
        <input type="text" name="harga" id="harga"  required value="<?= $row [''];?>" ><br><br<>
    </li>
    <br>
    <button type="submit" name="ubah">Ubah Data</button>
    <button type="submit">
        <a href="/index.php" style=" text decoration:none; color:black;">Kembali</a>
    </button>
</ul>            
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
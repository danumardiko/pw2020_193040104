<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Assets/css/style2.css">
    <title>Document</title>
</head>
<body>
<h3> Form Tambah Data Alat Musik</h3>
<form action="" method="post">


    
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br<>
    
        <label for="img">gambar:</label><br>
        <input type="text" name="img" id="img" required><br><br<>
   
        <label for="jenisalatmusik">Jenis alat musik:</label><br>
        <input type="text" name="jenisalatmusik" id="jenisalatmusik" required><br><br<>
    
        <label for="asal">Asal:</label><br>
        <input type="text" name="asal" id="asal" required><br><br<>
   
        <label for="harga">Harga:</label><br>
        <input type="" name="harga" id="harga" required><br><br<>
    
    <br>
    <button type="submit" name="tambah">Tambah Data</button>
    <button type="submit">
        <a href="index.php" style=" text decoration:none; color:black;">Kembali</a>
    </button>           
</body>
</html>

<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location:login.php");
    exit;
}

require 'functions.php';
    if(isset($_POST['tambah'])){
        if(tambah($_POST) > 0){
            echo "<script>
                        alert('Data Berhasil ditambahkan')
                        document.location.href = 'admin.php';
                   </script>";

        } else {
            echo "<script> 
                        alert('Data Gagal ditambahkan')
                        document.location.href = 'admin.php';
                 </script>";
        }
    }
?>
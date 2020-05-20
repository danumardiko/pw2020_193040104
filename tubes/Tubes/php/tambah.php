<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/tambah1.css">
<body>
<div class="container">
<h3> Form Tambah Data Alat Musik</h3>
<form action="" method="post">


    
        <label for="nama"><b>Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br<>
    
        <label for="img"><b>Gambar:</label><br>
        <input type="text" name="img" id="img" required><br><br<>
   
        <label for="jenisalatmusik"><b>Jenis alat musik:</label><br>
        <input type="text" name="jenisalatmusik" id="jenisalatmusik" required><br><br<>
    
        <label for="asal"><b>Asal:</label><br>
        <input type="text" name="asal" id="asal" required><br><br<>
   
        <label for="harga"><b>Harga:</label><br>
        <input type="" name="harga" id="harga" required><br><br<>
    
    <br>
    <button type="submit" name="tambah">Tambah Data</button>
    <button type="submit" >
        <a href="../index.php" style=" text decoration:none; color:black;">Kembali</a>
    </button>  
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
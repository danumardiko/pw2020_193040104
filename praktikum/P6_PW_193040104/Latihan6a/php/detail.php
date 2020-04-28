<?php 
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $row = query("SELECT * FROM tubes_193040104 WHERE id = $id")[0];
?>

<html>
    <head>
    
        <title>193040104</title>



        <link rel="stylesheet" type="text/css" href="../Assets/css/style3.css">

    </head>

<body>
<div class="container">
        <div class="gambar">
            <img src="../Assets/Img/<?= $row["img"]; ?>" alt="">
         </div>
            <div class="keterangan">
                <p><?= $row["nama"]; ?></p>
                <p><?= $row["jenisalatmusik"]; ?></p>
                <p><?= $row["asal"]; ?></p>
                <p><?= $row["harga"]; ?></p>
            </div>

            <button class="tombol_kembali"> <a href="../index.php">kembali</a> </button>
    </div>
</body>
</html>

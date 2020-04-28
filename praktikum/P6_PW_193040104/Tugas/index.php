<?php
    require 'php/functions.php';

    if (isset($_GET['cari'])){
        $keyword = $_GET['keyword'];
        $alatmusik = query ("SELECT * FROM tubes_193040104 WHERE
        img LIKE '%$keyword%'OR
        nama LIKE '%$keyword%'OR
        jenisalatmusik LIKE '%$keyword%'OR
        asal LIKE '%$keyword%'OR
        harga LIKE '%$keyword%' ");
    
    }else{
        //melakukan query 
    $alatmusik = query("SELECT * FROM tubes_193040104");
    
    }

    

?>






<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19304104</title>
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
     </head>  
<body>
    
    <div class="container">
    <h3>Daftar Alat Musik</h3>
    <form action="" method="get">
        <input type="text" name="keyword" >
        <button type="submit" name="cari">Cari</button>
    </form>

    <?php if(empty($alatmusik)) : ?>
    <h1>Data tidak ditemukan</h1>
    <?php else : ?>



        <?php foreach ($alatmusik as $row) :?>
            <p class="tipe">
                 <a href="php/detail.php?id=<?= $row['id'] ?>" style="text-decoration:none; color:black;" >
                 <img src="Assets/img/<?= $row ['img'];?>" alt=""><br>
                    <?= $row["nama"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
        <?php endif ; ?>
    </div>
    <a href="php/admin.php">
        <button type="">
        Masuk ke halaman admin
        </button>
    </a>

    </body>
</html>
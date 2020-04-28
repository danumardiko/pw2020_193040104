
<?php
//menghubungkan dengan file php lainnya
require 'functions.php';

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/style1.css">
</head>
<body>

    <a href="tambah.php">Tambah data</a>

    <form action="" method="get">
        <input type="text" name="keyword" >
        <button type="submit" name="cari">Cari</button>
    </form>

<table border="1" cellpadding="13" cellspacing="0">
    <tr>
        <th>#</th>
        <th>Opsi</th> 
        <th>Gambar</th> 
        <th>Nama</th> 
        <th>Jenis alat musik</th>    
        <th>Asal</th> 
        <th>Harga</th>
    </tr>

    <?php if(empty($alatmusik)) : ?>

    <tr>
        <td colspan="7">
        <h3>Data tidak ditemukan</h3>
        </td>
    </tr>
        <?php else : ?>
<?php $i = 1; ?>
<?php foreach ($alatmusik as $row): ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row['id']; ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin mau di hapus')"><button>Hapus</button></a>
        </td>
        <td><img src="../Assets/img/<?= $row['img']; ?>" width="150" alt=""></td>
        <td><?= $row ['nama']; ?></td>
        <td><?= $row ['jenisalatmusik']; ?></td>
        <td><?= $row ['asal']; ?></td>
        <td><?= $row ['harga']; ?></td>
    </tr>
    <?php $i++;?>
<?php endforeach;?>
<?php endif; ?>
</table>
    
    
</body>
</html>


    
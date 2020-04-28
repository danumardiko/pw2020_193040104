<?php
//menghubungkan dengan file php lainnya
require 'functions.php';

//melakukan query 
$alatmusik = query("SELECT * FROM tubes_193040104");
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
<body>
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
<?php $i = 1; ?>
<?php foreach ($alatmusik as $row): ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href=""><button>Ubah</button></a>
            <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../Assets/img/<?= $row['img']; ?>" width="150" alt=""></td>
        <td><?= $row ['nama']; ?></td>
        <td><?= $row ['jenisalatmusik']; ?></td>
        <td><?= $row ['asal']; ?></td>
        <td><?= $row ['harga']; ?></td>
    </tr>
    <?php $i++;?>
<?php endforeach;?>
</table>
    </div>
    
</body>
</html>


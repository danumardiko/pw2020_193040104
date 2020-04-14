<?php

   
$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

mysqli_select_db($conn, "pw_193040104") or die ("Database salah!");


 $alatmusik = mysqli_query($conn, "SELECT * FROM tubes_193040104");
?>

<html>
    <head>
    
        <title>193040104</title>

        <link rel="stylesheet" href="Assets/Css/style.css">

    </head>
    
<body>
<div class="container">
    <table border="1" cellpadding="3" cellspacing="2">
        <tr>
            <th>No.</th>
            <th>Photo</th>
            <th>Nama</th>
            <th>Jenis alat musik</th>
            <th>asal</th>
            <th>Harga</th>
         
        </tr>
        <?php $i = 1 ?>
        <?php while($row = mysqli_fetch_assoc($alatmusik)) :?>
        <tr class= "body">
            <td><?php echo $i ?></td>
            <td><img src="assets/img/<?=$row ["img"];?>" width="100" alt ="" ></td>
            <td><?=$row["nama"];?></td>
            <td><?=$row["jenis alat musik"];?></td>
            <td><?=$row["asal"];?></td>
            <td><?=$row["harga"];?></td>
</tr>
<?php $i++ ?>
        <?php endwhile; ?>
    </table>
    </div>
    
</body>
</html>
<?php

    require 'php/functions.php';


    $alatmusik = query("SELECT * FROM tubes_193040104")

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
        <?php foreach($alatmusik as $row) :?>
        <tr class= "body">
            <td><?php echo $i ?></td>
            <td><img src="assets/img/<?=$row ["img"];?>" width="100" alt ="" ></td>
            <td><?=$row["nama"];?></td>
            <td><?=$row["jenis alat musik"];?></td>
            <td><?=$row["asal"];?></td>
            <td><?=$row["harga"];?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ?>
    </table>
    </div>
    
</body>
</html>
<?php
    require 'php/functions.php';

    $alatmusik = query("SELECT * FROM tubes_193040104")

?>

<html>
    <head>
       

        <title>19304104</title>
        <link rel="stylesheet" type="text/css" href="Assets/css/style.css">

       

    </head>
    
    <div class="container">
        <?php foreach ($alatmusik as $row) :?>
            <p class="tipe">
                 <a href="php/detail.php?id=<?= $row['id'] ?>">
                    <?= $row["nama"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
    </div>
</html>
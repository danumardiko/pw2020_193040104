<?php

require 'functions.php';

if(isset($_POST["register"])){
    if (registrasi($_POST) > 0){
        echo "<script>
                alert('Registrasi berhasil');
                document.location.href = 'login.php';
                </script>";
    }else {
        echo"<script>
            alert('Registrasi gagal ');
            </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Assets/css/global2.css">
    <title>Document</title>
    
</head>
<body>
<div class="container">
    <h4 class="text-center"> FORM REGISTRASI</h4>
    <hr>
    <form>
        <div class="form-grup">
             <label><b>Username</label>
             <input type="text" name="username" class="form-control" placeholder="Buat Username">
        </div><br>

        <div class="form-grup">
             <label><b>Password</label>
             <input type="password" name="password" class="form-control" placeholder="Buat Password ">
        </div><br>
  
    


        <button type="submit" name="submit" class="btn btn-primary">Register</button>
        
    </form>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
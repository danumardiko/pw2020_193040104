



<?php 
session_start();
require 'functions.php';


//cek cookie
if(isset($_COOKIE['username'])  && isset($_COOKIE['hash'])){
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];


//ambil username berdasarkan id
$result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username= 'username'");
$row = mysqli_fetch_assoc($result);

//cek cookie dan username
if ($hash === hash('sha256', $row['id'], false))
    $_SESSION['username'] = $row['username'];
    header ("Location: admin.php");
    exit;


}



//melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect kenhalaman admin
if (isset($_SESSION['username'])){
    header("Location: admin.php");
    exit;
}
//login
if(isset($_POST['submit'])){
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    //mencocokan USERNAME dan password
    if (mysqli_num_rows($cek_user) > 0){
        $row = mysqli_fetch_assoc ($cek_user);
        if (password_verify($password,$row['password'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row ['id'], false);
        
        if(isset($_POST['remember'])){
            setcookie('username', $row['username'], time() + 60 * 60  * 24);
            $hash = hash('sha256', $row['id']);
            setcookie('hash', $hash, time() + 60 * 60 * 24);
        }
    }

        //disini
        if (hash('sha256', $row['id']) == $_SESSION['hash']){
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
        }
      
    }
    $error = true;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

<link rel="stylesheet" type="text/css" href="../Assets/css/global2.css">
</head>
<body>
<form action="" method="post">
<?php if (isset($error)) : ?>
<?php endif; ?> 

<div class="container">
    <h4 class="text-center"> FORM LOGIN</h4>
    <hr>
    <form>
        <div class="form-grup">
             <label><b>Username</label>
             <input type="text" name="username" class="form-control" placeholder="Masukan Username Anda">
        </div><br>

        <div class="form-grup">
             <label><b>Password</label>
             <input type="password" name="password" class="form-control" placeholder="Masukan Password anda">
        </div><br>
        <div class="remember">
    <input type="checkbox" name="remember">
    <label for="remember">Remeber me?</label>
    <br>
    <div class="registrasi">
    <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>


        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



    
</body>
</html>
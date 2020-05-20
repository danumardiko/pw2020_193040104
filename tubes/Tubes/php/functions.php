<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040104") or die ("Database salah!");

    return $conn;
}
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();
    
    $nama = htmlspecialchars($data['nama']);
    $img = htmlspecialchars($data['img']);
    $jenisalatmusik = htmlspecialchars($data['jenisalatmusik']);
    $asal = htmlspecialchars($data['asal']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO tubes_193040104
                VALUES
                ('','$img','$nama','$jenisalatmusik','$asal', '$harga')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
   $conn= koneksi();
   mysqli_query($conn, "DELETE FROM tubes_193040104 WHERE id=$id") ;
   return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $img = htmlspecialchars($data['img']);
    $jenisalatmusik = htmlspecialchars($data['jenisalatmusik']);
    $asal = htmlspecialchars($data['asal']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE tubes_193040104
            SET 
            nama = '$nama',
            gambar = '$img',
            jenis alat musik = '$jenisalatmusik',
            asal = '$asal',
            harga = '$harga'
            WHERE  id = '$id'
            ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function  registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);    


    //cek username sudah ada atau belum
    $result = mysqli_query($conn,  "SELECT username FROM user WHERE username = 'username'");
    if (mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }


    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO user VALUES('','$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);

}
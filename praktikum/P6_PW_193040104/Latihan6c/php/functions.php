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
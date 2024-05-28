<?php

function koneksi()
{

$conn = mysqli_connect('localhost', 'root', '', 'pw2024_233040027');
return $conn;
}
function query($querry) 
{


$conn = koneksi();

$result = mysqli_query($conn, $querry);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

return $rows;
}

function tambah($data)
{
    $conn = koneksi();
    $nama = htmlspecialchars ($data ['nama']);
    $nim = htmlspecialchars ($data ['nim']);
    $email = htmlspecialchars($data ['email']);
    $jurusan = htmlspecialchars($data ['jurusan']);
    
    
    $query= "INSERT INTO mahasiswa
              VALUES (null,  '$nama', '$nim', '$email', '$jurusan')
              ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) 
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars ($data ['id']);
    $nama = htmlspecialchars ($data ['nama']);
    $nim = htmlspecialchars ($data ['nim']);
    $email = htmlspecialchars($data ['email']);
    $jurusan = htmlspecialchars($data ['jurusan']);
    
    
    $query= "UPDATE mahasiswa SET
            nama ='$nama',
            nim ='$nim',
            email ='$email',
            jurusan = '$jurusan'
            WHERE id =$id 
              ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
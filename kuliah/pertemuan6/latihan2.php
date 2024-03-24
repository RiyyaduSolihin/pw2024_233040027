<?php
// $mahasiswa = [
//     ["M.Riyyadu Solihin", "233040027",
// "riyyadu1234@gmail.com","Teknik Informatika"],
//     ["Doddy Ferdiansyah", "033040001",
// "doddy@gmail.com","Teknik Industri"]
// ];
// Array Associative
//  key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    ["nama" => "M.Riyyadu Solihin", 
    "nrp" => "233040027",
    "Email" => "Riyyadu1234@gmail.com",
    "Jurusan" => "Teknik informatika"
],
    ["nama" => "Doddy Ferdiansyah", 
    "nrp" => "003040001",
    "Email" => "doddy@gmail.com",
    "Jurusan" => "Teknik industri",
  
]
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
            <li>Email : <?= $mhs["Email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</head>
<body>
    
</body>
</html>

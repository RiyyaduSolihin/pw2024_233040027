<?php

$mahasiswa = [
    ["nama" => "M.Riyyadu Solihin", 
    "nrp" => "233040027",
    "Email" => "Riyyadu1234@gmail.com",
    "Jurusan" => "Teknik informatika"
],
["nama" => "Riki Rikandi", 
"nrp" => "233040025",
"Email" => "Rikki@gmail.com",
"Jurusan" => "Teknik informatika"
],
["nama" => "Biagi Archie Fais", 
"nrp" => "233040006",
"Email" => "Biagi@gmail.com",
"Jurusan" => "Teknik informatika"
],
["nama" => "Asep saepul milah", 
"nrp" => "233040004",
"Email" => "Asep@gmail.com",
"Jurusan" => "Teknik informatika"
],
["nama" => "Robert gini algusto", 
"nrp" => "233042330",
"Email" => "Robert@gmail.com",
"Jurusan" => "Teknik informatika"
],
["nama" => "Cristiano mas dodo", 
"nrp" => "146040027",
"Email" => "Cristiano@gmail.com",
"Jurusan" => "Teknik informatika"
],
["nama" => "Lionel ankara messi", 
"nrp" => "233041123",
"Email" => "Lionel@gmail.com",
"Jurusan" => "Teknik informatika"
],
["nama" => "Turtle mbappe", 
"nrp" => "233040221",
"Email" => "mbappe4@gmail.com",
"Jurusan" => "Teknik informatika"
],
["nama" => "Erling holand", 
"nrp" => "233042342",
"Email" => "Erling@gmail.com",
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

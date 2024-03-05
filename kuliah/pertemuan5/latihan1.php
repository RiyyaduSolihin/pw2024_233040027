<?php
// 1. Membuat isi array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Riyyadu", 3.3, false];



// 2. Mencetak isi array
// Mencetak 1 nilai pada array, menggunakan index
// index dimulai 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// cetak semua isi array
// var_dump() atau print_r()
// digunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump ($mahasiswa);
echo "<hr>";



// 3. Memanipulasi isi array
// Menambah isi array
// di akhir: [] atau array_push()
$hari[] = "kamis";
$hari[] = "jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// di awal : array_unshift()
array_unshift($mahasiswa, "233040027");
print_r($mahasiswa);
echo "<hr>";

// menghapus isi array
// di belakang: array_pop();
// di depan: arrayshift();
array_pop($hari);
array_shift($bulan);
print_r ($hari);
echo "<br>";
print_r($bulan); 
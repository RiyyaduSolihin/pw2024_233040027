<?php
function hitungluaslingkaran($r) {
  $i = 3.14;
  $luas = $i * $r * $r;
  return $luas;
}
function hitungkelilinglingkaran($r) {
  $i = 3.14;
  $keliling =2 * $i * $r;
  return $keliling;
}

echo "<h4>Menghitung Luas Lingkaran</h4>";
$luaslingkaran = hitungluaslingkaran(10);
echo "Jari-jari = 10 cm. <br>";
echo "Luas lingkaran = $luaslingkaran cm<sup>2</sup> <br>";
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
$kelilinglingkaran = hitungkelilinglingkaran(20);
echo "Jari-jari = 20 cm. <br>";
echo "keliling lingkaran = $kelilinglingkaran cm <br>";
echo "<hr>";

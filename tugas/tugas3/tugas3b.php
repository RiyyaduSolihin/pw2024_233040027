<?php

function urutanAngka ($urutan) {
    $angka = 1;
      for ($i = 1; $i <= $urutan; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $angka . " ";
            $angka++;
        }
        echo "<br>";
      }
}

echo urutanAngka(5);
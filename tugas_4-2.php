<?php
// Suatu pintu air di suatu tempat mempunyai 523 cabang saluran, 
// dalam satu minggu terpakai 8891 liter air. 
// Berapa liter air rata-rata yang dipakai oleh tiap-tiap keluarga 
// dalam waktu itu ?
$saluranAir = 523;
$pemakaianAir = 8891;
$hasil = (int) $pemakaianAir / $saluranAir;
echo "Jumlah Saluran = $saluranAir<br>";
echo "Jumlah Terpakai = $pemakaianAir<br>";
echo "Rata-rata Pemakaian = ...?<br>";
echo "Jawaban: " . $hasil . " liter/keluarga";

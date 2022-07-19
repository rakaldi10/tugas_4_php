<?php
// Seorang petani membeli beberapa ekor anak kambing dengan harga Rp. 8.000,-
// Dia jual dengan harga Rp. 7.500,- dan mendapat keuntungan 300 rupiah 
// untuk tiap ekor anak kambing. 
// Berapa ekor anak kambing yang ia beli ?
$beli = 8000;
$jual = 7500;
$untung = 300;
$rugi = $beli - $jual;
$kebawah = floor($rugi / $untung);
$keatas = ceil($rugi / $untung);
echo "Harga Beli = Rp. $beli<br>";
echo "Harga Jual = Rp. $jual<br>";
echo "Keuntungan = Rp. $untung<br>";
echo "Berapa Jumlah yang dibeli? Jawaban: $kebawah atau $keatas ekor";

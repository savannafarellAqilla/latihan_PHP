<?php
echo "<h2>Tugas 1</h2>";
// Tugas 1: Mengapa string bisa dijumlahkan?
$a = "10"; // string angka
$b = "20"; // string angka
$hasil = $a + $b; // otomatis dikonversi ke integer oleh PHP
echo "String \"10\" + \"20\" = $hasil (PHP otomatis mengubah string angka ke integer)";
echo "<br><br>";

echo "<h2>Tugas 2</h2>";
// Tugas 2: Perbedaan / dan %
$angka1 = 10;
$angka2 = 3;
echo "Hasil 10 / 3 = " . ($angka1 / $angka2) . " (pembagian menghasilkan pecahan)";
echo "<br>";
echo "Hasil 10 % 3 = " . ($angka1 % $angka2) . " (modulo menghasilkan sisa bagi)";
echo "<br><br>";

echo "<h2>Tugas 3</h2>";
// Tugas 3: Menggabungkan string 90 dan 80
$tugas1 = "90";
$tugas2 = "80";
$gabungan = $tugas1 . $tugas2;
echo "Penggabungan string tugas1 dan tugas2 = $gabungan";
echo "<br><br>";

echo "<h2>Contoh String dalam PHP</h2>";
// Contoh string seperti pada soal
$string1='Ini adalah string sederhana';
$string2='Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3='Dia berkata: "I\'ll be back"';
$string4='Anda telah berhasil menghapus C:\\xampp\\htdoc';
$string5='Kalimat ini tidak akan pindah ke: \n baris baru';
$string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; echo "<br>";
echo $string5; echo "<br>";
echo $string6; echo "<br>";
?>

<?php
// Simpan file ini dengan nama misalnya: perulangan_kontrol.php
// Lalu buka di browser: http://localhost/perulangan_kontrol.php

echo "<h2>20 Contoh Kasus Penggunaan Logika Perulangan dan Kontrol</h2>";
echo "<ol>";

/* ==============================
   1. Menampilkan angka 1 - 10
================================ */
echo "<li><b>Menampilkan angka 1 sampai 10</b><br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "</li>";

/* ==============================
   2. Menampilkan bilangan genap 1-20
================================ */
echo "<li><b>Bilangan genap dari 1 sampai 20</b><br>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "</li>";

/* ==============================
   3. Menampilkan bilangan ganjil 1-20
================================ */
echo "<li><b>Bilangan ganjil dari 1 sampai 20</b><br>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "</li>";

/* ==============================
   4. Perkalian (Tabel perkalian 5)
================================ */
echo "<li><b>Tabel perkalian 5</b><br>";
for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "<br>";
}
echo "</li>";

/* ==============================
   5. Menjumlahkan angka 1-10
================================ */
echo "<li><b>Menjumlahkan angka 1 sampai 10</b><br>";
$total = 0;
for ($i = 1; $i <= 10; $i++) {
    $total += $i;
}
echo "Total = $total";
echo "</li>";

/* ==============================
   6. Menghitung faktorial (5!)
================================ */
echo "<li><b>Faktorial dari 5</b><br>";
$hasil = 1;
for ($i = 1; $i <= 5; $i++) {
    $hasil *= $i;
}
echo "5! = $hasil";
echo "</li>";

/* ==============================
   7. Menghitung deret Fibonacci (10 angka)
================================ */
echo "<li><b>Deret Fibonacci 10 angka</b><br>";
$a = 0; $b = 1;
for ($i = 0; $i < 10; $i++) {
    echo $a . " ";
    $c = $a + $b;
    $a = $b;
    $b = $c;
}
echo "</li>";

/* ==============================
   8. Nested loop (segitiga bintang)
================================ */
echo "<li><b>Segitiga bintang</b><br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "</li>";

/* ==============================
   9. Loop dengan break
================================ */
echo "<li><b>Loop dengan break (berhenti saat i=5)</b><br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . " ";
}
echo "</li>";

/* ==============================
   10. Loop dengan continue
================================ */
echo "<li><b>Loop dengan continue (lewati i=5)</b><br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . " ";
}
echo "</li>";

/* ==============================
   11. Mengecek bilangan prima 1-20
================================ */
echo "<li><b>Bilangan prima 1-20</b><br>";
for ($i = 2; $i <= 20; $i++) {
    $prima = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $prima = false;
            break;
        }
    }
    if ($prima) echo $i . " ";
}
echo "</li>";

/* ==============================
   12. Menghitung rata-rata nilai
================================ */
echo "<li><b>Rata-rata nilai</b><br>";
$nilai = [80, 90, 75, 85, 100];
$total = 0;
foreach ($nilai as $n) {
    $total += $n;
}
$rata = $total / count($nilai);
echo "Rata-rata = $rata";
echo "</li>";

/* ==============================
   13. Foreach array nama
================================ */
echo "<li><b>Menampilkan daftar nama</b><br>";
$nama = ["Andi", "Budi", "Cici", "Dewi"];
foreach ($nama as $n) {
    echo "- $n <br>";
}
echo "</li>";

/* ==============================
   14. While loop
================================ */
echo "<li><b>While loop (angka 1-5)</b><br>";
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
echo "</li>";

/* ==============================
   15. Do-While loop
================================ */
echo "<li><b>Do-While loop (angka 1-5)</b><br>";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 5);
echo "</li>";

/* ==============================
   16. Switch case
================================ */
echo "<li><b>Switch case hari</b><br>";
$hari = "Senin";
switch ($hari) {
    case "Senin": echo "Hari kerja awal minggu"; break;
    case "Sabtu": echo "Hari libur sebagian"; break;
    case "Minggu": echo "Hari libur penuh"; break;
    default: echo "Hari biasa";
}
echo "</li>";

/* ==============================
   17. Menampilkan huruf A-Z
================================ */
echo "<li><b>Huruf A-Z</b><br>";
for ($i = 65; $i <= 90; $i++) {
    echo chr($i) . " ";
}
echo "</li>";

/* ==============================
   18. Loop multidimensi (array 2D)
================================ */
echo "<li><b>Array 2D (matriks 2x2)</b><br>";
$matrix = [[1,2],[3,4]];
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo $matrix[$i][$j] . " ";
    }
    echo "<br>";
}
echo "</li>";

/* ==============================
   19. Menentukan angka terbesar
================================ */
echo "<li><b>Mencari angka terbesar dalam array</b><br>";
$angka = [5, 12, 7, 20, 3];
$max = $angka[0];
foreach ($angka as $a) {
    if ($a > $max) $max = $a;
}
echo "Angka terbesar = $max";
echo "</li>";

/* ==============================
   20. Menentukan nilai lulus/gagal
================================ */
echo "<li><b>Mengecek nilai lulus/gagal</b><br>";
$nilai = [60, 75, 40, 90];
foreach ($nilai as $n) {
    if ($n >= 70) {
        echo "Nilai $n = Lulus<br>";
    } else {
        echo "Nilai $n = Gagal<br>";
    }
}
echo "</li>";

echo "</ol>";
?>


<?php
// 1. Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan fungsi
$bil1 = 100;
$bil2 = 150;
echo "Bilangan terbesar dari $bil1 dan $bil2 adalah: " . bilanganTerbesar($bil1, $bil2) . "<br><br>";

// 2. Menampilkan tanggal sekarang dengan fungsi getdate()
$tanggal = getdate();
echo "Tanggal sekarang (getdate): " . $tanggal['mday'] . "-" . $tanggal['mon'] . "-" . $tanggal['year'] . "<br><br>";

// 3. Menampilkan tanggal sekarang dengan fungsi date('d-F-Y')
echo "Tanggal sekarang (date): " . date('d-F-Y');
?>

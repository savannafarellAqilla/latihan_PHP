<?php
// 1) Login sederhana
$username = "admin";
$password = "1234";

if ($username == "admin" && $password == "1234") {
    echo "Login berhasil!<br>";
} else {
    echo "Login gagal, username atau password salah.<br>";
}

echo "<hr>";

// 2) Cek usia
$usia = 17;
if ($usia >= 18) {
    echo "Usia $usia tahun → Boleh mendaftar.<br>";
} else {
    echo "Usia $usia tahun → Belum cukup umur untuk mendaftar.<br>";
}

echo "<hr>";

// 3) Cek nilai ujian
$nilai = 75;
if ($nilai >= 70) {
    echo "Nilai $nilai → Lulus ujian.<br>";
} else {
    echo "Nilai $nilai → Tidak lulus ujian.<br>";
}

echo "<hr>";

// 4) Cek role pengguna
$role = "user"; // coba ganti "admin" atau "user"
if ($role == "admin") {
    echo "Halo Admin, Anda punya akses penuh.<br>";
} else {
    echo "Halo User, akses Anda terbatas.<br>";
}

echo "<hr>";

// 5) Cek diskon belanja
$totalBelanja = 120000; // dalam rupiah
if ($totalBelanja >= 100000) {
    echo "Total belanja Rp$totalBelanja → Anda dapat diskon 10%!<br>";
} else {
    echo "Total belanja Rp$totalBelanja → Belum dapat diskon.<br>";
}
?>

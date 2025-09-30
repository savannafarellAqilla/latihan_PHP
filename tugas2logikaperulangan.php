<?php
// Contoh grading nilai A - E

$nilai = 73; // ubah nilai sesuai kebutuhan
echo "Nilai Anda: $nilai <br>";

if ($nilai >= 85 && $nilai <= 100) {
    echo "Grade: A <br>";
    echo "Keterangan: Sangat Baik 👍<br>";
} elseif ($nilai >= 75 && $nilai < 85) {
    echo "Grade: B <br>";
    echo "Keterangan: Baik 👌<br>";
} elseif ($nilai >= 60 && $nilai < 75) {
    echo "Grade: C <br>";
    echo "Keterangan: Cukup 🙂<br>";
} elseif ($nilai >= 45 && $nilai < 60) {
    echo "Grade: D <br>";
    echo "Keterangan: Kurang 😐<br>";
} elseif ($nilai >= 0 && $nilai < 45) {
    echo "Grade: E <br>";
    echo "Keterangan: Gagal ❌<br>";
} else {
    echo "Nilai tidak valid! Harus 0 - 100<br>";
}
?>

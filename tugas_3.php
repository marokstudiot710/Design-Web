<?php
// 1. Membuat array asosiatif
$siswa = array(
    "Ali" => 85,
    "Budi" => 92,
    "Citra" => 78,
    "Dewi" => 95,
    "Eka" => 88
);

// 2. Menampilkan data awal
echo "Data Awal:<br />";
foreach ($siswa as $nama => $nilai) {
    echo "$nama : $nilai<br />";
}

// 3. Mengurutkan array berdasarkan nilai secara ascending (terkecil ke terbesar)
asort($siswa);
echo "<br />Urutan Ascending berdasarkan Nilai:<br />";
foreach ($siswa as $nama => $nilai) {
    echo "$nama : $nilai<br />";
}

// 4. Mengurutkan array berdasarkan nilai secara descending (terbesar ke terkecil)
arsort($siswa);
echo "<br />Urutan Descending berdasarkan Nilai:<br />";
foreach ($siswa as $nama => $nilai) {
    echo "$nama : $nilai<br />";
}

// 5. Mengurutkan array berdasarkan kunci secara ascending
ksort($siswa);
echo "<br />Urutan Ascending berdasarkan Kunci (Nama):<br />";
foreach ($siswa as $nama => $nilai) {
    echo "$nama : $nilai<br />";
}

// 6. Mengurutkan array berdasarkan kunci secara descending
krsort($siswa);
echo "<br />Urutan Descending berdasarkan Kunci (Nama):<br />";
foreach ($siswa as $nama => $nilai) {
    echo "$nama : $nilai<br />";
}

// 7. Mengambil rata-rata nilai
$rata_rata = array_sum($siswa) / count($siswa);
echo "<br />Rata-rata Nilai Siswa: $rata_rata<br />";

// 8. Menambahkan siswa baru ke dalam array
$siswa["Fathimah"] = 90;
echo "<br />Data Setelah Menambahkan Fathimah:<br />";
foreach ($siswa as $nama => $nilai) {
    echo "$nama : $nilai<br />";
}

// 9. Mencari nilai tertinggi dalam array
$max_nilai = max($siswa);
echo "<br />Nilai Tertinggi: $max_nilai<br />";

// 10. Mencari nilai terendah dalam array
$min_nilai = min($siswa);
echo "<br />Nilai Terendah: $min_nilai<br />";

// 11. Menghapus siswa dengan nama "Ali" dari array
unset($siswa["Ali"]);
echo "<br />Data Setelah Menghapus Ali:<br />";
foreach ($siswa as $nama => $nilai) {
    echo "$nama : $nilai<br />";
}
?>

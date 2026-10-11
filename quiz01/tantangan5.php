<?php
$nama = "Mikhael Saputra Sinaga";
$kelas = "TK B";
$jurusan = "Teknik Komputer";
$umur = 19;
$nilai = 85;

echo "================================<br>";
echo "        KARTU PROFIL SISWA<br>";
echo "================================<br>";

printf("Nama       : %s<br>", $nama);
printf("Kelas      : %s<br>", $kelas);
printf("Jurusan    : %s<br>", $jurusan);
printf("Umur       : %d tahun<br>", $umur);
printf("Nilai      : %.2f<br>", $nilai);

echo "================================<br>";

$status = ($nilai >= 75) ? "LULUS" : "TIDAK LULUS";
printf("Status     : %s", $status);
?>
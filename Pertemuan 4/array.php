<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(',', $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br><br>";
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(',', $karyawanPengalamanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "<br><br>";
echo "Daftar nilai Mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

//soal cerita nomor 13
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
  ];
  
  // Hitung total nilai
  $totalNilai = 0;
  foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai[1];
  }
  
  // Hitung rata-rata nilai
  $rataRataNilai = $totalNilai / count($daftarNilai);
  
  // Daftar siswa yang mencapai nilai di atas rata-rata
  $siswaDiAtasRataRata = [];
  foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rataRataNilai) {
      $siswaDiAtasRataRata[] = $nilai[0];
    }
  }
  
  // Tampilkan header tabel
  echo "<h1>Daftar Nilai Siswa Ujian Matematika</h1>";
  echo "<table border='1'>";
  echo "<th>Nama</th><th>Nilai</th>";
  
  // Tampilkan daftar nilai siswa
  foreach ($daftarNilai as $nilai) {
    echo "<tr><td>{$nilai[0]}</td><td>{$nilai[1]}</td></tr>";
  }
  
  // Tampilkan rata-rata nilai
  echo "<tr><td colspan='2'>Rata-rata: {$rataRataNilai}</td></tr>";
  
  // Tampilkan daftar siswa di atas rata-rata
  echo "<tr><td colspan='2'>Daftar Siswa di Atas Rata-rata: " . implode(', ', $siswaDiAtasRataRata) . "</td></tr>";
  
  echo "</table>";
?>
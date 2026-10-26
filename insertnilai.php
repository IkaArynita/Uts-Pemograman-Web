<?php
// koneksi ke db
require_once __DIR__ . "/connect.php";

// data yang akan diisi ke tabel diterima dari formnilai.php
$nim = $_POST["nim"];
$namamahasiswa = $_POST["namamahasiswa"];
$nilaiakhir = $_POST["nilaiakhir"];

// konversi ke nilai huruf dan predikat
if((00.00 <= $nilaiakhir)AND($nilaiakhir <= 34.50 )) {
    $nilai_huruf = 'E';
    $predikat = "Tidak Lulus";

}elseif((34.51 <= $nilaiakhir)AND($nilaiakhir <= 50.50 )) {
    $nilai_huruf = 'D';
    $predikat = "Kurang";

}elseif((50.51 <= $nilaiakhir)AND($nilaiakhir <= 65.50 )) {
    $nilai_huruf = 'C';
    $predikat = "Cukup";

}elseif((65.51 <= $nilaiakhir)AND($nilaiakhir <= 80.50 )) {
    $nilai_huruf = 'B';
    $predikat = "Memuaskan";
}elseif((80.51 <= $nilaiakhir)AND($nilaiakhir <= 100.00 )) {
    $nilai_huruf = 'A';
    $predikat = "Sangat Memuaskan";

}else{
    $nilai_huruf = $predikat = "Invalid Nilai AKhir";
}

// kueri insert data ke dalam tabel
$sql = "INSERT INTO nilaimahasiswa (nim, namamahasiswa, nilaiakhir, nilaihuruf, predikat)
VALUES ('$nim', '$namamahasiswa', '$nilaiakhir', '$nilai_huruf', '$predikat')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

header("Location: bacanilai.php");
//mysqli_close($conn);

?>
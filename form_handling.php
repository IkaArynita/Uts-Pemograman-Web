<?php
// inisialisasi variabel
$errNama = $errNilai = "";
$nama_mhsw = $nilai_akhir = "";
$sts_nama = $sts_nilai = "invalid";

// menangkap data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // cek field nama berisi atau kosong
    if (!empty($_POST["nama_mhsw"])) {
        // sanitasi data
        $nama_mhsw = sanitasi($_POST["nama_mhsw"]);

        // cek format nama
        if (preg_match("/^[a-zA-Z' ]*$/", $nama_mhsw)) {
            $sts_nama = "valid";
        } else {
            $errNama = "Nama hanya berisi huruf dan spasi!";
        }
    } else {
        $errNama = "Nama wajib diisi!";
    }

    // cek field nilai berisi atau kosong
    if (isset($_POST["nilai_akhir"]) &&
        $_POST["nilai_akhir"] !== "") {

        // sanitasi data
        $nilai_akhir = sanitasi($_POST["nilai_akhir"]);

        // cek format nilai
        if (preg_match("/^[0-9]+(\.[0-9]+)?$/", $nilai_akhir)) {

            // cek rentang nilai (0-100)
            if ($nilai_akhir >= 0 && $nilai_akhir <= 100) {
                $sts_nilai = "valid";
            } else {
                $errNilai = "Nilai harus antara 0 - 100!";
            }

        } else {
            $errNilai = "Nilai hanya berisi angka dan tanda titik!";
        }

    } else {
        $errNilai = "Nilai wajib diisi!";
    }
}

// fungsi sanitasi data
function sanitasi(string $data): string {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Mahasiswa</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <form method= "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nim">Nim: <span class="error">*</span></label><br/>
        <input type="text" name="nim" value="<?php echo $nim; ?>"> <span class="error"><?php echo " " . $errNim; ?></span><br/>
        <label for="nama_mhsw">Nama Mahasiswa: <span class="error">*</span></label><br/>
        <input type="text" name="nama_mhsw" value="<?php echo $nama_mhsw; ?>"> <span class="error"><?php echo " " . $errNama; ?></span><br/>
        <label for="nilai_akhir">Nilai Akhir: <span class="error">*</span></label><br/>
        <input type="text" name="nilai_akhir" value="<?php echo $nilai_akhir; ?>"> <span class="error"><?php echo " " . $errNilai; ?></span><br/>
        <span class="error">* wajib di isi</span><br/><br/>
        <input type="submit" name="submit" value="simpan">
    </form>

    <?php
    // tampilkan data yang di-inputkan jika valid
    if ($sts_nama == "valid" && $sts_nilai == "valid") {
        echo "<br/> <h3>Data Nilai Mahasiswa</h3>";
        echo "Nim: " . $nim . "<br/>";
        echo "Nama Mahasiswa: " . $nama_mhsw . "<br/>";
        echo "Nilai Akhir: " . $nilai_akhir . "<br/>";
    }
    ?>

</body>
</html>

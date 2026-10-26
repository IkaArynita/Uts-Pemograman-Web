<?php
// definisi nilai parameter server
$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "mydb";

// membuat koneksi ke database
//$conn = mysqli_connect ("localhost", "root", "" );
$conn = mysqli_connect ($servername, $username, $password, );

// memeriksa koneksi berhasil atau tidak
if (!$conn) {
    // jika koneksi gagal
  die("Connection failed: " . mysqli_connect_error());
}

// membuat sebuah database dengan nama : db5a
$sql = "CREATE DATABASE db5anew";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Pembuatan database gagal: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
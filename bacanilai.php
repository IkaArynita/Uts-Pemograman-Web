<?php
require_once __DIR__ . "/connect.php";

$sql = "SELECT * FROM nilaimahasiswa";
// Execute the SQL query
$result = mysqli_query($conn, $sql);

//link ke form
echo "<a href = 'formnilai.php'> Tambah Data</a>";
// Process the result set
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  //echo "<h3>Data My Guest</h3>";
  echo "<table border=1 cellpadding=5> <br>" ;
  echo "<caption> <strong>Data Nilai Mahasiswa </strong></caption>";
  echo "<tr> 
             <th>NIM</th> 
             <th>Nama Mahasiswa</th> 
             <th>Nilai Akhir</th> 
             <th>Nilai Huruf</th> 
             <th>Predikat</th> 
             <th>Created_date</th> 
             <th>Modified Date</th> 
              <th>Aksi</th> 
        </tr>";
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"] . " ". " - Reg Date: ". $row["reg_date"].  "<br>";
    echo "<tr> 
             <td> " . $row ["NIM"] . "</td> 
             <td> " . $row ["NamaMahasiswa"] . "" ."</td> 
             <td> " . $row["NilaiAkhir"] . "</td> 
             <td> " . $row["NilaiHuruf"]."</td> 
             <td> " . $row["Predikat"]."</td> 
             <td> " . $row["created_date"]."</td> 
             <td> " . $row["modified_date"]."</td> 
             <td> <a href ='#'> Edit </a> | <a href='#'> Delete</a> </td>
        </tr>";
    }
  echo "</table>";

} else {
  echo "0 results - Data Not Found!";
}

mysqli_close($conn);
?>
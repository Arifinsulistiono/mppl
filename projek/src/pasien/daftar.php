<?php
include '../db.php';

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  $alamat = $_POST['alamat'];
  $conn->query("INSERT INTO pasien (nama, umur, alamat) VALUES ('$nama', $umur, '$alamat')");
  echo "<p>Pendaftaran berhasil.</p>";
}
?>

<form method="post">
  Nama: <input type="text" name="nama"><br>
  Umur: <input type="number" name="umur"><br>
  Alamat: <input type="text" name="alamat"><br>
  <input type="submit" name="submit" value="Daftar">
</form>

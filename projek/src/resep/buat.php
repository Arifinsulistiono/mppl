<?php
include '../db.php';

if (isset($_POST['submit'])) {
  $id_pasien = $_POST['id_pasien'];
  $resep = $_POST['resep'];
  $status = 'Belum Diambil';
  $conn->query("INSERT INTO prescriptions (pasien_id, resep, status_obat) VALUES ($id_pasien, '$resep', '$status')");
  echo "<p>Resep berhasil dibuat.</p>";
}
?>

<form method="post">
  ID Pasien: <input type="number" name="id_pasien"><br>
  Resep: <textarea name="resep"></textarea><br>
  <input type="submit" name="submit" value="Buat Resep">
</form>

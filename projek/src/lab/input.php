<?php
include '../db.php';

if (isset($_POST['submit'])) {
  $id_pasien = $_POST['id_pasien'];
  $hasil = $_POST['hasil'];
  $conn->query("INSERT INTO lab_results (pasien_id, hasil) VALUES ($id_pasien, '$hasil')");
  echo "<p>Hasil lab berhasil disimpan.</p>";
}
?>

<form method="post">
  ID Pasien: <input type="number" name="id_pasien"><br>
  Hasil Lab: <textarea name="hasil"></textarea><br>
  <input type="submit" name="submit" value="Simpan">
</form>

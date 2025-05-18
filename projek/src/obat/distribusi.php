<?php
include '../db.php';

if (isset($_POST['submit'])) {
  $id_pasien = $_POST['id_pasien'];
  $id_resep = $_POST['id_resep'];
  $status = 'Sudah Diambil';
  $conn->query("UPDATE prescriptions SET status_obat='$status' WHERE id=$id_resep AND pasien_id=$id_pasien");
  echo "<p>Obat telah didistribusikan.</p>";
}
?>
<form method="post">
  ID Pasien: <input type="text" name="id_pasien"><br>
  ID Resep: <input type="text" name="id_resep"><br>
  <input type="submit" name="submit" value="Distribusi Obat">
</form>
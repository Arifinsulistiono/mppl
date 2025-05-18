<?php
include '../db.php';

if (isset($_POST['submit'])) {
  $id_pasien = $_POST['id_pasien'];
  $jumlah = $_POST['jumlah'];
  $tanggal = date('Y-m-d');

  $sql = "INSERT INTO pembayaran (pasien_id, jumlah, tanggal) VALUES ($id_pasien, $jumlah, '$tanggal')";
  if ($conn->query($sql)) {
    echo "<p><strong>Pembayaran berhasil!</strong></p>";
    echo "<a href='nota.php?id_pasien=$id_pasien'>Cetak Nota</a>";
  } else {
    echo "<p>Gagal menyimpan data: " . $conn->error . "</p>";
  }
}
?>

<h2>Form Pembayaran</h2>
<form method="post">
  ID Pasien: <input type="number" name="id_pasien" required><br><br>
  Jumlah Bayar (Rp): <input type="number" name="jumlah" required><br><br>
  <input type="submit" name="submit" value="Bayar">
</form>

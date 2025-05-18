CREATE DATABASE IF NOT EXISTS klinik;
USE klinik;

DROP TABLE IF EXISTS transaksi_obat;
DROP TABLE IF EXISTS pembayaran;
DROP TABLE IF EXISTS prescriptions;
DROP TABLE IF EXISTS lab_results;
DROP TABLE IF EXISTS pasien;
DROP TABLE IF EXISTS pegawai;

CREATE TABLE pasien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    umur INT,
    alamat TEXT
);

CREATE TABLE lab_results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pasien_id INT,
    hasil TEXT,
    FOREIGN KEY (pasien_id) REFERENCES pasien(id)
);

CREATE TABLE prescriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pasien_id INT,
    resep TEXT,
    status_obat VARCHAR(50),
    FOREIGN KEY (pasien_id) REFERENCES pasien(id)
);

CREATE TABLE pembayaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pasien_id INT,
    jumlah INT,
    tanggal DATE,
    FOREIGN KEY (pasien_id) REFERENCES pasien(id)
);

CREATE TABLE pegawai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    jabatan VARCHAR(50)
);

CREATE TABLE transaksi_obat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pasien_id INT,
    prescription_id INT,
    pegawai_id INT,
    tanggal DATE,
    FOREIGN KEY (pasien_id) REFERENCES pasien(id),
    FOREIGN KEY (prescription_id) REFERENCES prescriptions(id),
    FOREIGN KEY (pegawai_id) REFERENCES pegawai(id)
);

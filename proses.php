<?php
// koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "MANGKU");

// cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// ambil data dari form
$nama    = $_POST['nama'];
$produk  = $_POST['produk'];
$tanggal = $_POST['tanggal'];
$durasi  = $_POST['durasi'];

// simpan ke tabel booking
$sql = "INSERT INTO booking (nama, produk, tanggal, durasi)
        VALUES ('$nama', '$produk', '$tanggal', '$durasi')";

if ($koneksi->query($sql) === TRUE) {
    echo "Booking berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// tutup koneksi
$koneksi->close();
?>

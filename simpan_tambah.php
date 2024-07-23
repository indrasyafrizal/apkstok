<?php
include 'db.php';

$nama_barang = $_POST['nama_barang'];
$total_belum_dibuat = $_POST['total_belum_dibuat'];
$total_full_hitam = $_POST['total_full_hitam'];
$total_hitam_oren = $_POST['total_hitam_oren'];
$keuntungan_per_barang = $_POST['keuntungan_per_barang'];

$sql = "INSERT INTO lampu_sein (nama_barang, total_belum_dibuat, total_full_hitam, total_hitam_oren, keuntungan_per_barang)
VALUES ('$nama_barang', '$total_belum_dibuat', '$total_full_hitam', '$total_hitam_oren', '$keuntungan_per_barang')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

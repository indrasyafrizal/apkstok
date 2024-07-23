<?php
include 'db.php';

$nama_barang_as = $_POST['nama_barang_as'];
$total_belum_dibuat_as = $_POST['total_belum_dibuat_as'];
$total_sudah_dibuat_as = $_POST['total_sudah_dibuat_as'];

// Insert data baru ke database
$sql_as = "INSERT INTO as_standar (nama_barang_as, total_belum_dibuat_as, total_sudah_dibuat_as) VALUES ('$nama_barang_as', '$total_belum_dibuat_as', '$total_sudah_dibuat_as')";

if ($conn->query($sql_as) === TRUE) {
    // Redirect ke index.php setelah berhasil
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql_as . "<br>" . $conn->error;
}

$conn->close();
?>

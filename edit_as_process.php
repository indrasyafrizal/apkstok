<?php
include 'db.php';

// Ambil data dari form
$id = $_POST['id'];
$nama_barang_as = $_POST['nama_barang_as'];
$total_belum_dibuat_as = $_POST['total_belum_dibuat_as'];
$total_sudah_dibuat_as = $_POST['total_sudah_dibuat_as'];
$tambah_belum_dibuat = $_POST['tambah_belum_dibuat'];
$catat_terjual = $_POST['catat_terjual'];

// Hitung total baru
$new_total_belum_dibuat_as = $total_belum_dibuat_as + $tambah_belum_dibuat;
$new_total_sudah_dibuat_as = $total_sudah_dibuat_as - $catat_terjual;

// Query untuk mengupdate data
$sql = "UPDATE as_standar SET nama_barang_as = ?, total_belum_dibuat_as = ?, total_sudah_dibuat_as = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("siii", $nama_barang_as, $new_total_belum_dibuat_as, $new_total_sudah_dibuat_as, $id);

if ($stmt->execute()) {
    // Redirect ke index.php setelah berhasil
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

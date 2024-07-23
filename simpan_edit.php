<?php
include 'db.php';

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$total_belum_dibuat = $_POST['total_belum_dibuat'];
$total_full_hitam = $_POST['total_full_hitam'];
$total_hitam_oren = $_POST['total_hitam_oren'];

// Ambil data lama
$sql = "SELECT total_belum_dibuat, total_full_hitam, total_hitam_oren FROM lampu_sein WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$old_total_belum_dibuat = $row['total_belum_dibuat'];
$old_total_full_hitam = $row['total_full_hitam'];
$old_total_hitam_oren = $row['total_hitam_oren'];

// Hitung perubahan
$change_full_hitam = $total_full_hitam - $old_total_full_hitam;
$change_hitam_oren = $total_hitam_oren - $old_total_hitam_oren;

// Update total_belum_dibuat
$new_total_belum_dibuat = $old_total_belum_dibuat - $change_full_hitam - $change_hitam_oren;

// Update data di database
$sql_update = "UPDATE lampu_sein SET nama_barang='$nama_barang', total_belum_dibuat='$new_total_belum_dibuat', total_full_hitam='$total_full_hitam', total_hitam_oren='$total_hitam_oren' WHERE id=$id";

if ($conn->query($sql_update) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql_update . "<br>" . $conn->error;
}

$conn->close();
?>

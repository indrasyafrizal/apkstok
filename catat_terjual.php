<?php
include 'db.php';

$id = $_POST['id'];
$terjual_full_hitam = $_POST['terjual_full_hitam'];
$terjual_hitam_oren = $_POST['terjual_hitam_oren'];

// Ambil data lama
$sql = "SELECT total_full_hitam, total_hitam_oren FROM lampu_sein WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$old_total_full_hitam = $row['total_full_hitam'];
$old_total_hitam_oren = $row['total_hitam_oren'];

// Hitung total baru
$new_total_full_hitam = $old_total_full_hitam - $terjual_full_hitam;
$new_total_hitam_oren = $old_total_hitam_oren - $terjual_hitam_oren;

// Update data di database
$sql_update = "UPDATE lampu_sein SET total_full_hitam='$new_total_full_hitam', total_hitam_oren='$new_total_hitam_oren' WHERE id=$id";

if ($conn->query($sql_update) === TRUE) {
    // Redirect ke index.php setelah berhasil
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql_update . "<br>" . $conn->error;
}

$conn->close();
?>

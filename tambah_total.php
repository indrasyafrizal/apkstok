<?php
include 'db.php';

$id = $_POST['id'];
$additional_belum_dibuat = $_POST['additional_belum_dibuat'];

// Ambil data lama
$sql = "SELECT total_belum_dibuat FROM lampu_sein WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$old_total_belum_dibuat = $row['total_belum_dibuat'];

// Hitung total_belum_dibuat baru
$new_total_belum_dibuat = $old_total_belum_dibuat + $additional_belum_dibuat;

// Update data di database
$sql_update = "UPDATE lampu_sein SET total_belum_dibuat='$new_total_belum_dibuat' WHERE id=$id";

if ($conn->query($sql_update) === TRUE) {
    // Redirect ke index.php setelah berhasil
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql_update . "<br>" . $conn->error;
}

$conn->close();
?>

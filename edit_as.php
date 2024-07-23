<?php
include 'db.php';

// Ambil ID dari query string
$id = $_GET['id'];

// Query untuk mengambil data berdasarkan ID
$sql = "SELECT * FROM as_standar WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Ambil data
    $row = $result->fetch_assoc();
    $nama_barang_as = $row['nama_barang_as'];
    $total_belum_dibuat_as = $row['total_belum_dibuat_as'];
    $total_sudah_dibuat_as = $row['total_sudah_dibuat_as'];
} else {
    echo "Data tidak ditemukan.";
    exit();
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang As Standar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Barang As Standar</h1>
        <form action="edit_as_process.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <div class="form-group">
                <label for="nama_barang_as">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang_as" name="nama_barang_as" value="<?php echo htmlspecialchars($nama_barang_as); ?>" required>
            </div>
            <div class="form-group">
                <label for="total_belum_dibuat_as">Total Belum Dibuat</label>
                <input type="number" class="form-control" id="total_belum_dibuat_as" name="total_belum_dibuat_as" value="<?php echo htmlspecialchars($total_belum_dibuat_as); ?>" required>
            </div>
            <div class="form-group">
                <label for="total_sudah_dibuat_as">Total Sudah Dibuat</label>
                <input type="number" class="form-control" id="total_sudah_dibuat_as" name="total_sudah_dibuat_as" value="<?php echo htmlspecialchars($total_sudah_dibuat_as); ?>" required>
            </div>

            <!-- Form Tambah Total Belum Dibuat -->
            <div class="form-group">
                <label for="tambah_belum_dibuat">Tambah Total Belum Dibuat</label>
                <input type="number" class="form-control" id="tambah_belum_dibuat" name="tambah_belum_dibuat" value="0">
            </div>

            <!-- Form Catat Terjual -->
            <div class="form-group">
                <label for="catat_terjual">Catat Terjual</label>
                <input type="number" class="form-control" id="catat_terjual" name="catat_terjual" value="0">
                <small class="form-text text-muted">Jika barang yang terjual, isikan jumlahnya di sini. Total Belum Dibuat akan berkurang dan Total Sudah Dibuat akan bertambah sesuai jumlah ini.</small>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-3">Kembali ke Index</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

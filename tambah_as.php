<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang As Standar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Barang As Standar</h1>
        <form action="tambah_as_process.php" method="post">
            <div class="form-group">
                <label for="nama_barang_as">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang_as" name="nama_barang_as" required>
            </div>
            <div class="form-group">
                <label for="total_belum_dibuat_as">Total Belum Dibuat</label>
                <input type="number" class="form-control" id="total_belum_dibuat_as" name="total_belum_dibuat_as" required>
            </div>
            <div class="form-group">
                <label for="total_sudah_dibuat_as">Total Sudah Dibuat</label>
                <input type="number" class="form-control" id="total_sudah_dibuat_as" name="total_sudah_dibuat_as" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Stok</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-3">Kembali ke Index</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

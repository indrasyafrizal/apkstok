<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Barang</h1>
        <form action="simpan_tambah.php" method="post">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="total_belum_dibuat">Total Belum Dibuat</label>
                <input type="number" class="form-control" id="total_belum_dibuat" name="total_belum_dibuat" required>
            </div>
            <div class="form-group">
                <label for="total_full_hitam">Total Full Hitam</label>
                <input type="number" class="form-control" id="total_full_hitam" name="total_full_hitam" required>
            </div>
            <div class="form-group">
                <label for="total_hitam_oren">Total Hitam Oren</label>
                <input type="number" class="form-control" id="total_hitam_oren" name="total_hitam_oren" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

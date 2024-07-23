<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Barang</h1>
        <?php
        include 'db.php';

        $id = $_GET['id'];
        $sql = "SELECT * FROM lampu_sein WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Data tidak ditemukan!";
            exit;
        }

        $conn->close();
        ?>
        <form action="simpan_edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required>
            </div>
            <div class="form-group">
                <label for="total_belum_dibuat">Total Belum Dibuat</label>
                <input type="number" class="form-control" id="total_belum_dibuat" name="total_belum_dibuat" value="<?php echo $row['total_belum_dibuat']; ?>" required>
            </div>
            <div class="form-group">
                <label for="total_full_hitam">Total Full Hitam</label>
                <input type="number" class="form-control" id="total_full_hitam" name="total_full_hitam" value="<?php echo $row['total_full_hitam']; ?>" required>
            </div>
            <div class="form-group">
                <label for="total_hitam_oren">Total Hitam Oren</label>
                <input type="number" class="form-control" id="total_hitam_oren" name="total_hitam_oren" value="<?php echo $row['total_hitam_oren']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
        
        <!-- Form untuk menambah Total Belum Dibuat -->
        <h2 class="mt-5">Tambah Total Belum Dibuat</h2>
        <form action="tambah_total.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="additional_belum_dibuat">Tambah Total Belum Dibuat</label>
                <input type="number" class="form-control" id="additional_belum_dibuat" name="additional_belum_dibuat" value="0" required>
            </div>
            <button type="submit" class="btn btn-success">Tambah</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
        
        <!-- Form untuk mencatat jumlah terjual -->
        <h2 class="mt-5">Catat Jumlah Terjual</h2>
        <form action="catat_terjual.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="terjual_full_hitam">Jumlah Terjual Full Hitam</label>
                <input type="number" class="form-control" id="terjual_full_hitam" name="terjual_full_hitam" value="0" required>
            </div>
            <div class="form-group">
                <label for="terjual_hitam_oren">Jumlah Terjual Hitam Oren</label>
                <input type="number" class="form-control" id="terjual_hitam_oren" name="terjual_hitam_oren" value="0" required>
            </div>
            <button type="submit" class="btn btn-warning">Catat Terjual</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

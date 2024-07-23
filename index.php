<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Stok Barang Lampu Sein -->
        <h1 class="mb-4">Stok Barang Lampu Sein</h1>
        <a href="tambah.php" class="btn btn-success mb-3">Tambah Barang Lampu Sein</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Total Belum Dibuat</th>
                    <th>Total Full Hitam</th>
                    <th>Total Hitam Oren</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db.php';

                // Query untuk mengambil data
                $sql = "SELECT * FROM lampu_sein";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Menampilkan data setiap baris
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['nama_barang']}</td>
                                <td>{$row['total_belum_dibuat']}</td>
                                <td>{$row['total_full_hitam']}</td>
                                <td>{$row['total_hitam_oren']}</td>
                                <td>
                                    <a href='edit.php?id={$row['id']}' class='btn btn-primary btn-sm'>Edit</a>
                                    <a href='hapus.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

        <!-- Stok Barang As Standar -->
        <h1 class="mt-5 mb-4">Stok Barang As Standar</h1>
        <a href="tambah_as.php" class="btn btn-success mb-3">Tambah Barang As Standar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Total Belum Dibuat</th>
                    <th>Total Sudah Dibuat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db.php';

                // Query untuk mengambil data
                $sql_as = "SELECT * FROM as_standar";
                $result_as = $conn->query($sql_as);

                if ($result_as->num_rows > 0) {
                    // Menampilkan data setiap baris
                    while($row_as = $result_as->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row_as['nama_barang_as']}</td>
                                <td>{$row_as['total_belum_dibuat_as']}</td>
                                <td>{$row_as['total_sudah_dibuat_as']}</td>
                                <td>
                                    <a href='edit_as.php?id={$row_as['id']}' class='btn btn-primary btn-sm'>Edit</a>
                                    <a href='hapus_as.php?id={$row_as['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

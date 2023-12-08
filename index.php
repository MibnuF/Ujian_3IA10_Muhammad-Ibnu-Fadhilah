<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="input-form">
            <h2>Peminjam Buku</h2>
            <h2>Isi Data Mahasiswa</h2>
            <form action="insert.php" method="post" onsubmit="return showSuccessPopup()">
                <label for="npm">NPM:</label>
                <input type="text" name="npm" required>

                <label for="nama">Nama:</label>
                <input type="text" name="nama" required>

                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" required>

                <button type="submit">Tambah Mahasiswa</button>
            </form>
        </div>

        <div class="output-table">
            <?php include 'select.php'; ?>
        </div>
    </div>

    <div id="success-popup" class="success-popup">
        Mahasiswa berhasil ditambahkan!
    </div>

    <script src="script.js"></script>
</body>
</html>

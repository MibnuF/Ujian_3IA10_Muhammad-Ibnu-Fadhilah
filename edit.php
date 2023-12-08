<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM mahasiswa_db WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Data mahasiswa tidak ditemukan.";
        exit();
    }
} else {
    echo "ID mahasiswa tidak valid.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE mahasiswa_db SET npm='$npm', nama='$nama', jurusan='$jurusan' WHERE id=$id";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Error in SQL query: " . mysqli_error($koneksi));
    }

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Mahasiswa</title>
</head>
<body>

    <div class="container">
        <div class="input-form">
            <h2>Edit Mahasiswa</h2>
            <form action="" method="post" onsubmit="return showSuccessPopup()">
                <label for="npm">NPM:</label>
                <input type="text" name="npm" value="<?php echo $data['npm']; ?>" required>

                <label for="nama">Nama:</label>
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>

                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required>

                <button type="submit">Update</button>
            </form>
        </div>

        <div class="output-table">
            <!-- Tabel data mahasiswa muncul di sini -->
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa_db (npm, nama, jurusan) VALUES ('$npm', '$nama', '$jurusan')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Error in SQL query: " . mysqli_error($koneksi));
    }
}

mysqli_close($koneksi);
header("Location: index.php");
exit();
?>

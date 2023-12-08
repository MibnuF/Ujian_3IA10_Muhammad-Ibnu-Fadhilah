<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM mahasiswa_db WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Error in SQL query: " . mysqli_error($koneksi));
    }
}

mysqli_close($koneksi);
header("Location: index.php");
exit();
?>

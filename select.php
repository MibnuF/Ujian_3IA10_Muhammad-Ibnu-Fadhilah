<?php
include 'koneksi.php';

$query = "SELECT * FROM mahasiswa_db";
$result = mysqli_query($koneksi, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>NPM</th><th>Nama</th><th>Jurusan</th><th>Action</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['npm']}</td>";
        echo "<td>{$row['nama']}</td>";
        echo "<td>{$row['jurusan']}</td>";
        echo "<td><a href='edit.php?id={$row['id']}'>Edit</a> | <a href='delete.php?id={$row['id']}'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.";
}

mysqli_close($koneksi);
?>

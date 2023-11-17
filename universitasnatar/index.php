<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h2>Data Mahasiswa Universitas Natar</h2>
</header>

<nav>
    <a href='tambahdata.php'>Tambah Data</a>
    <a href='edit.php'>Edit Data</a>
    <a href='hapusdata.php'>Hapus Data</a>
</nav>

<div class="container">
    <!-- Formulir pencarian -->
    <form action='index.php' method='get'>
        <input type='text' name='search' placeholder='Cari NIM atau Nama'>
        <input type='submit' value='Cari'>
    </form>

    <!-- Tabel data mahasiswa -->
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Action</th>
        </tr>

        <?php
        $search = '';
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $query = "SELECT * FROM mahasiswa WHERE nim LIKE '%$search%' OR nama LIKE '%$search%' OR program_studi LIKE '%$search%'";
        } else {
            $query = "SELECT * FROM mahasiswa";
        }

        // Mendapatkan data dari database
        $result = $conn->query($query);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['nim']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['program_studi']}</td>
                    <td>
                        <a href='edit.php?nim={$row['nim']}'>Edit</a>
                        <a href='hapusdata.php?nim={$row['nim']}'>Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</div>

<footer>
    &copy; 2023 Universitas Natar
</footer>

</body>
</html>

<?php
$conn->close();
?>

<?php
include 'koneksi.php';

// Periksa apakah parameter nim terdefinisi
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Query untuk mendapatkan data mahasiswa berdasarkan NIM
    $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $result = $conn->query($query);

    // Periksa apakah data ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $program_studi = $row['program_studi'];
    } else {
        // Tampilkan pesan jika data tidak ditemukan
        echo "Data Mahasiswa tidak ditemukan.";
        exit;
    }
} else {
    // Tampilkan pesan jika parameter nim tidak terdefinisi
    echo "NIM tidak terdefinisi.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>

<header>
    <h2>Edit Data Mahasiswa</h2>
</header>

<nav>
    <a href='index.php'>Data Mahasiswa</a>
    <a href='tambahdata.php'>Tambah Data</a>
    <a href='edit.php'>Edit Data</a>
    <a href='hapus.php'>Hapus Data</a>
</nav>

<div class="container">
    <!-- Formulir edit data -->
    <form action="proses_editdata.php" method="post">
        <input type="hidden" name="nim" value="<?php echo $nim; ?>">
        
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>" required>

        <label for="program_studi">Program Studi:</label>
        <select name="program_studi" required>
            <option value="if" <?php echo ($program_studi == 'if') ? 'selected' : ''; ?>>Informatika (IF)</option>
            <option value="el" <?php echo ($program_studi == 'el') ? 'selected' : ''; ?>>Elektro (EL)</option>
            <option value="gl" <?php echo ($program_studi == 'gl') ? 'selected' : ''; ?>>Geologi (GL)</option>
            <option value="kh" <?php echo ($program_studi == 'kh') ? 'selected' : ''; ?>>Kehutanan (KH)</option>
        </select>

        <input type="submit" value="Simpan Perubahan">
    </form>
</div>

<footer>
    &copy; 2023 Universitas Natar
</footer>

</body>
</html>

<?php
$conn->close();
?>

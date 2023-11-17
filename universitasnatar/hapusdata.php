<?php
include 'koneksi.php';

// Periksa apakah parameter nim terdefinisi
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Query untuk menghapus data mahasiswa berdasarkan NIM
    $query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    $result = $conn->query($query);

    // Periksa apakah penghapusan berhasil
    if ($result) {
        echo "Data Mahasiswa dengan NIM $nim berhasil dihapus.";
    } else {
        echo "Gagal menghapus data mahasiswa.";
    }
} else {
    // Tampilkan pesan jika parameter nim tidak terdefinisi
    echo "<div class='container'><p style='color: #ff8266; text-align: center;'>NIM tidak terdefinisi.</p></div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Mahasiswa</title>
</head>
<body>
</body>
</html>

<?php
$conn->close();
?>

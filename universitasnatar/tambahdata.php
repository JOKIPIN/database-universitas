<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim            = $_POST['nim'];
    $nama           = $_POST['nama'];
    $program_studi  = $_POST['program_studi'];

    $query = "INSERT INTO mahasiswa (nim, nama, program_studi) VALUES ('$nim', '$nama', '$program_studi')";

    if ($conn->query($query) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!-- Form untuk menambah data -->
<form action="tambahdata.php" method="post">
    NIM: <input type="text" name="nim" required><br>
    Nama: <input type="text" name="nama" required><br>
    Program Studi: 
    <select name="program_studi" required>
        <option value="if">Informatika</option>
        <option value="el">Elektro</option>
        <option value="gl">Geologi</option>
        <option value="kh">Kehutanan</option>
    </select><br>
    <input type="submit" value="Tambah Data">
</form>
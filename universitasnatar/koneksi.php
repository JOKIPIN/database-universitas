<?php
$conn =new mysqli('localhost', 'root', '', 'universitasnatar');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

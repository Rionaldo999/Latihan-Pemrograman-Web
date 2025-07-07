<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "form_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$kodeproduk = $_POST['kodeproduk'];
$namamakanan = $_POST['namamakanan'];
hargajual = $_POST['hargajual'];
beratisi = $_POST['beratisi'];

$sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Successfully saved $nmaProduk!'); window.location.href='product.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "form_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO kontak (nama, email, tanggal_lahir, pesan) VALUES ('$nama', '$email', '$tanggal_lahir', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dikirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
session_start();
// Koneksi ke database
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "registrasi";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan username dan password dari formulir masuk
$input_username = $_POST['nama'];
$input_password = $_POST['pass'];

// Gunakan prepared statement untuk mencegah SQL injection
$sql = "SELECT * FROM registrasi WHERE nama=? AND pass=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $input_username, $input_password);

// Eksekusi prepared statement
$stmt->execute();

// Ambil hasil query
$result = $stmt->get_result();

// Periksa hasil query
if ($result->num_rows > 0) {
    // Fetch hasil sebagai array asosiatif
    $user = $result->fetch_assoc();
    header("Location: mainmenu.php");
    exit(); // Pastikan untuk keluar dari skrip setelah mengarahkan
} else {
    $_SESSION['error_message'] = "Username Tidak Ditemukan";
    header("Location: testi.php");
    exit();
}

// Tutup prepared statement dan koneksi
$stmt->close();
$conn->close();
?>

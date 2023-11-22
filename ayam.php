<?php
// Inisialisasi session
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ga.css">
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="ayamproses.php" class="form">
        <img src="css/Asset/florism.png"><br>
        <h3>Please Sign In</h3>
    
        <input type="text" id="nama" name="nama" placeholder="Username"><br>       
        
        <input type="password" id="pass" name="pass" placeholder="Password"><br>

        <input id="login" type="submit" value="Login">
        <?php
// Tampilkan pesan kesalahan jika ada
if (isset($_SESSION['error_message'])) {
    $pesan_error = $_SESSION['error_message'];
    echo "<p>{$pesan_error}</p>";

    // Hapus pesan kesalahan dari session agar tidak ditampilkan lagi setelah refresh
    unset($_SESSION['error_message']);
}
?>

        <div class="gugel">
        <img id="google" src="css/Asset/google.png">
        <button>Login Menggunakan Google</button>
         </div>
        <h4>Belum Punya Akun?</h4>
    <button id="signup">Sign Up</button>
    </div>
    </form>
</body>
</html>

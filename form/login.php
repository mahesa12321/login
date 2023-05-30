<?php
    // Cek jika form login telah disubmit
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Periksa username dan password yang dimasukkan
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Contoh validasi login
        if($username == 'admin' && $password == 'admin123') {
            // Login berhasil
            header('Location: registration.html');
        exit;
        } else {
            // Login gagal
            echo "Username atau password salah.";
        }
    }
?>

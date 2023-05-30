<?php
    // Periksa jika form pendaftaran telah disubmit
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Periksa data yang dikirimkan
        $name = $_POST['name'];
        $email = $_POST['email'];
        $photo = $_FILES['photo'];

        // Periksa apakah file foto telah diunggah dengan sukses
        if($photo['error'] === UPLOAD_ERR_OK) {
            $photoName = $photo['name'];
            $photoTmp = $photo['tmp_name'];

            // Pindahkan file foto ke direktori tujuan
            $targetDir = "C:/xampp/htdocs/form/photo";
            $targetPath = $targetDir . $photoName;

            if(move_uploaded_file($photoTmp, $targetPath)) {
                // File foto berhasil diunggah
                echo "Pendaftaran berhasil! Foto Anda telah diunggah.";
            } else {
                // Gagal mengunggah file foto
                echo "Gagal mengunggah file foto.";
            }
        } else {
            // Terjadi kesalahan saat mengunggah file foto
            echo "Terjadi kesalahan saat mengunggah file foto.";
        }
    }
?>
``

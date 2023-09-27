<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan input tidak kosong
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Misalkan Anda memiliki pengujian sederhana di sini, Anda dapat memeriksa
        // kredensial dengan database atau metode otentikasi lainnya.
        if ($username === "angga" && $password === "asd") {
            // Jika otentikasi berhasil, Anda bisa mengarahkan pengguna ke halaman yang sesuai.
            header("Location: http://localhost/phpmyadmin");
            exit(); // Pastikan untuk mengakhiri eksekusi setelah mengarahkan pengguna
        } else {
            // Jika otentikasi gagal, Anda bisa menampilkan pesan kesalahan.
            $error_message = "Login gagal. Periksa kembali username dan password Anda.";
        }
    } else {
        $error_message = "Isi semua bidang.";
    }
}
?>
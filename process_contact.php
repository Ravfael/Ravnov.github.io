<?php

// Konfigurasi database
$host = 'localhost';
$user = 'root'; // Default user XAMPP
$password = ''; // Default password XAMPP
$dbname = 'portfolio';

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mendapatkan data dari formulir
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Menggunakan Prepared Statement untuk menghindari SQL Injection
    $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Mengikat parameter
    $stmt->bind_param("sss", $name, $email, $message);

    // Menjalankan pernyataan SQL
    if ($stmt->execute()) {
        // Jika data berhasil disimpan, alihkan kembali ke halaman utama
        header("Location: index.html");
        exit(); // Pastikan untuk berhenti setelah pengalihan
    } else {
        // Jika terjadi error, tampilkan error
        echo "Error: " . $stmt->error;
    }


    // Menutup Prepared Statement
    $stmt->close();
}

// Menutup koneksi
$conn->close();
?>

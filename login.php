<?php
session_start();

// Login hardcoded (bisa ganti ke database nanti)
$users = [
  "admin" => "admin123",
  "karyawan1" => "pass123"
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.html");
} else {
    echo "Login gagal. <a href='index.html'>Coba lagi</a>";
}
?>
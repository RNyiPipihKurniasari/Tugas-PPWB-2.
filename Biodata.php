<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 350px; text-align: center;">
        <h1 style="font-size: 24px; margin-bottom: 20px;">Biodata Diri</h1>
        <img src="Foto pipi.jpg" alt="Foto Pipi" style="width: 150px; height: 150px; border-radius: 50%; margin-bottom: 20px;">
        <table style="width: 100%; margin: 0 auto; text-align: left;">
            <tr>
                <td><strong>Nama:</strong></td>
                <td>R NYI PIPIH KURNIASARI</td>
            </tr>
            <tr>
                <td><strong>NIM:</strong></td>
                <td>09031182328115</td>
            </tr>
            <tr>
                <td><strong>Tanggal Lahir:</strong></td>
                <td>Palembang, 24 Mei 2005</td>
            </tr>
            <tr>
                <td><strong>Hobi:</strong></td>
                <td>Memasak dan Menonton</td>
            </tr>
            <tr>
                <td><strong>Alamat:</strong></td>
                <td>Tri Dharma Permai</td>
            </tr>
            <tr>
                <td><strong>Agama:</strong></td>
                <td>Islam</td>
            </tr>
            <tr>
                <td><strong>Pekerjaan:</strong></td>
                <td>Mahasiswa</td>
            </tr>
        </table>
        <br>
        <a href="logout.php" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #f44336; color: white; text-decoration: none; border-radius: 5px;">
            Logout
        </a>
    </div>
</body>
</html>
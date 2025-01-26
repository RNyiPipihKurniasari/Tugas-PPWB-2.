<?php
session_start();

// Data login
$username = "pipi";
$password = "123";

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    if ($input_username == $username && $input_password == $password) {
        $_SESSION["loggedin"] = true;
        header("Location: biodata.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: center;">
        <h1 style="font-size: 24px; margin-bottom: 20px;">Login</h1>
        <?php if (!empty($error)) echo "<p style='color: red; font-size: 14px;'>$error</p>"; ?>
        <form method="POST" action="">
            <table style="margin: 0 auto;">
                <tr>
                    <td style="text-align: left; padding-bottom: 10px;">
                        <label for="username" style="font-weight: bold;">Username:</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="username" name="username" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" required>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left; padding: 10px 0;">
                        <label for="password" style="font-weight: bold;">Password:</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="password" name="password" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;" required>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; padding: 20px 0;">
                        <button type="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-size: 16px;">
                            Login
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
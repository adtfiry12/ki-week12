<?php
session_start();

if (!isset($_SESSION['login_time'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-md text-center">
        <h1 class="text-2xl font-bold mb-4">Selamat Datang!</h1>
        <p class="text-gray-700">Anda login pada: <strong><?= $_SESSION['login_time'] ?></strong></p>
    </div>
</body>
</html>

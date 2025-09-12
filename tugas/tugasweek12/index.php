<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-50">
    <form action="login_action.php" method="POST" class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <label class="block mb-4">
            <span class="text-gray-700">Nomor HP</span>
            <input type="text" name="nomor_hp" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2" required>
        </label>
        <label class="block mb-6">
            <span class="text-gray-700">Password</span>
            <input type="password" name="password" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2" required>
        </label>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Login</button>
    </form>
</body>
</html>

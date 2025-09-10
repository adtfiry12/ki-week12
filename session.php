<?php

session_set_cookie_params(time() + (60 * 5));

session_start();

// membuat session baru
$_SESSION["username"] = "aditya";

//menghapus session tertentu
unset($_SESSION['username']);

//menghapus semua session
session_destroy();

// memanggil session yang sudah kita buat
echo $_SESSION["username"];
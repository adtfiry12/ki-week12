<?php
// Membuat cookie bernama "user" dengan nilai "Budi"
setcookie("user", "Budi", time() + (86400 * 30), "/"); 
// 86400 = 1 hari, jadi ini berlaku 30 hari
echo "Cookie 'user' sudah dibuat!";
?>

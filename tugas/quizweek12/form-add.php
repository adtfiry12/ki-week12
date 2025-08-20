<?php

$nama = $_POST['name'];
$hobi = $_POST['hobi'];


setcookie(
    "name",
    "$nama",
    time() + (60 * 5),
    "/"
);
setcookie(
    "hobi",
    "$hobi",
    time() + (60 * 5),
    "/"
);

header("Location: tampil.php");
    exit;
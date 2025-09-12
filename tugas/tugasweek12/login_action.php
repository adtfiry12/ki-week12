<?php
session_start();
include 'config.php';

class LoginProcess {
    private $nomor_hp;
    private $password;

    public function __construct($nomor_hp, $password) {
        $this->nomor_hp = $nomor_hp;
        $this->password = $password;
    }

    public function validate() {
        if ($this->nomor_hp === NOMOR_HP && $this->password === PASSWORD) {
            $_SESSION['login_time'] = date('Y-m-d H:i:s');
            header('Location: dashboard.php');
            exit;
        } else {
            echo 
            "<script>
            alert('nomor telepon atau password salah');
            window.location.href = 'index.php';
            </script>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomor_hp = $_POST['nomor_hp'] ?? '';
    $password = $_POST['password'] ?? '';

    $login = new LoginProcess($nomor_hp, $password);
    $login->validate();
}
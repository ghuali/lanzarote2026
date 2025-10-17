<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
} else {
    echo "Hola " . $_SESSION['usuario'];
}
?>

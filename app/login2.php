<?php
session_start();
if ($_POST) {
    header("Location: /index.php");
    exit();
}
?>

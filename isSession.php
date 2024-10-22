<?php
    session_start();
    if (!isset($_SESSION['ID_admin'])){
        header('Location: ./session.php');
    }
?>
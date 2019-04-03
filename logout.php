<?php
    require 'include/core.php';
    unset($_SESSION['UID']);
    header("Location: ../login.php");
?>
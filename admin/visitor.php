<?php

session_start();

$_SESSION['is_admin'] = true;

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 1;
} else {
   
    if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
        $_SESSION['visits']++;
    }
}



echo "Number of visitors: " . $_SESSION['visits'];
?>

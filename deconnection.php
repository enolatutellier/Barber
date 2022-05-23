<?php
session_start();
unset($_SESSION['connexion']);
header('Location:index.php');
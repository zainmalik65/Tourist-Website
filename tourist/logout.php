<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["actid"]);
header("Location:home.php");
?>
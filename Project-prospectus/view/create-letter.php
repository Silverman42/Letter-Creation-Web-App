<?php
session_start();
include("./controller/_pdo.php");
include("./db_connect/db_connect.php");
include("./controller/login.php");
$idCheck = new PageCheck("./index.php?err=2");
$userId = $_SESSION['user_id'];
?>
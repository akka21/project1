<?php
//login_succes.php

session_start();
include "database.php";
$db = new DB('localhost', 'root', '', 'project1', 'utf8');

if (isset($_SESSION["email"])) {
    echo '<h3>Login Succes, Welcome - ' . $_SESSION["email"] . '</h3>';
    echo(date("Y-m-d H:i:s",time()));
    echo '<br><br><a href="logout.php">Logout</a>';
} else {
    header("location:index.php");
}


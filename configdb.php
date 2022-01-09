<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'login-dbbase');
if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
    exit();
    // $server = "localhost";
    // $user = "root";
    // $pass = "";
    // $database = "login-dbbase";

    // $conn = mysqli_connect($server, $user, $pass, $database);

    // if (!$conn) {
    //     die("<script>alert('Gagal tersambung dengan database.')</script>");
}

<?php
// menghubungkan php dengan koneksi database
include 'configdb.php';

error_reporting(0);

// mengaktifkan session pada php
session_start();

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($configdb, "select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:halaman_admin.php");

        // cek jika user login sebagai pegawai
    } else if ($data['level'] == "visitor") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "visitor";
        // alihkan ke halaman dashboard pegawai
        header("location:halaman_visitor.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
    }
} else {
    //header("location:login.php?pesan=gagal");
    echo $data['level'];
}
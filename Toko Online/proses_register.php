<?php
// Include database connection
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $nama_petugas = $_POST['nama_petugas'];
    $password = $_POST['password'];
    $level =$_POST['level'];


    if(empty($username)) {
        echo "<script>alert('username anda tidak boleh kosong');location.href='register.php';</script>";

    } elseif(empty($nama_petugas)){
        echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query(mysql:$conn,query: "insert into petugas (username, nama_petugas, level, password) value ('".$username."','".$level."','".$nama_petugas."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Berhasil !');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal..');location.href='register.php';</script>";
        }
    }
}
$conn->close();
?>


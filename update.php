<?php

require('koneksi.php');
$id = $_GET['id'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$lahir = $_POST['lahir'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];

if (isset($_POST['submit'])){
    $sql = mysqli_query($koneksi, "UPDATE 'diri' SET nama='$nama',email='$email',lahir='$lahir',telepon='$telelpon',alamat='$alamat',kelamin='$jk' WHERE id='$id'");
    if ($sql){
        header('location:index.php');
    }
}

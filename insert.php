<?php

require('koneksi.php');

$email = $_POST['email'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$lahir = $_POST['lahir'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];

if (isset($_POST['submit'])) {
    $sql = mysqli_query($koneksi, "INSERT INTO diri (nama,email,lahir,telepon,alamat,kelamin) VALUES ('$nama','$email','$lahir','$telepon','$alamat','$jk')");
}
if ($sql) {
    header('location: index.php');
}
?>
<script type="text/javascript">
    alert("berhasil");
    document.location = "index.php";
</script>
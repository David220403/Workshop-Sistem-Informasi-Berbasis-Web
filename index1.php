<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>Halaman Utama || Upload Gambar</title>
</head>

<body>
    <h2 style="text-align: center;">UPLOAD MULTI FILE PHP</h2>
    <?php
    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == "gagal_ukuran") {
    ?>
            <div class="alert alert-warning">
                <strong>Warning!</strong>Ukuran File Terlalu Besar
            </div>
        <?php
        } elseif ($_GET['alert'] == "gagal_ektensi") {
        ?>
            <div class="alert alert-warning">
                <strong>Warning!</strong>Ektensi Gambar Tidak Diperbolehkan
            </div>
        <?php
        } elseif ($_GET['alert'] == "simpan") {
        ?>
            <div class="alert alert-warning">
                <strong>Success!</strong> Gambar Berhasil Disimpan
            </div>
    <?php
        }
    }
    ?>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label> Foto :</label>
            <input type="file" name="foto[]" required="required" multiple />
            <p style="color: green">Ektensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
        </div>
        <input type="submit" name="" value="Simpan" class="btn btn-primary">
    </form>
</body>

</html>
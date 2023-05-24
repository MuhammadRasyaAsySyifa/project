<?php 
require 'header.html';
require '../functions/functions.php';

$id = $_GET["id"];

$getDetail = query("SELECT * FROM obat WHERE id='$id'")[0];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <div class="container p-5">
        <div class="card shadow-lg p-3" style="width: 100%;">
            <div>
                <img src="../assets/medicine/<?= $getDetail["gambar_obat"]; ?>" alt="default" width="200" height="200" style="border-radius: 50%;" class="shadow-lg">
            </div>
            <div class="card-title display-5 fw-bold border-bottom">
                <?= $getDetail["nama_obat"]; ?>
            </div>
            <div class="card-text text-muted">
                Rp. <?= $getDetail["harga_obat"]; ?>
            </div>
            <div class="lead text-justify">
                <?= $getDetail["deskripsi_obat"]; ?>
            </div>
            <div>
                <a href="medicine.php" class="btn btn-primary shadow-lg mt-3">Kembali ke Toko</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
require 'footer.html';
?>
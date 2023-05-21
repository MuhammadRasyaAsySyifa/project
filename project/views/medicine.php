<?php 
require '../functions/functions.php';
require 'header.html';

$getMedicine = query("SELECT * FROM obat");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Obat</title>
</head>
<body>
    <!-- Header Start -->
    <div class="container p-2 py-5">
        <div class="head-title">
            <div class="h1 border-bottom">
                Beli Obat
            </div>
            <div>
                Silahkan Beli Obat Secara Online di Health C Dengan Harga Terjangkau Dan Praktis
            </div>
        </div>
    </div>
    <!-- Header End -->
    <hr>
    <div class="d-flex flex-column">
        <div class="container d-flex justify-content-center flex-row flex-wrap gap-3">
            <?php foreach($getMedicine as $gm) : ?>
            <div class="card overflow-hidden shadow-lg" style="height: max-content;">
                <div class="img-fluid">
                    <img class="shadow-md" src="../assets/medicine/<?= $gm["gambar_obat"]; ?>" alt="default-photo" width="250">
                </div>
                <div class="p-3">
                    <div class="card-title">
                        <h5 class="fw-bold"><?= $gm["nama_obat"]; ?></h5>
                    </div>
                    <div>
                        <p>Harga : <span>Rp.<?= $gm["harga_obat"]; ?></span></p>
                    </div>
                    <div class="d-flex flex-column gap-1">
                        <div>
                            <a class="btn btn-primary w-100" href="#">Coming Soon</a>
                        </div>
                        <div>
                            <a class="btn btn-success w-100" href="cart.php?id=<?= $gm["id"]; ?>">Tambahkan ke Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

<?php 
require 'footer.html';
?>
<?php 
require '../functions/functions.php';
require 'header.html';

$getHistory = query("SELECT * FROM pembelian_obat");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian Obat</title>
</head>
<body>
    <div class="container p-5 d-flex flex-column gap-2">
        <?php foreach($getHistory as $gh) : ?>
        <div class="card overflow-hidden shadow-lg">
           <div class="d-flex flex-row">
                <div>
                     <img src="../assets/medicine/default.avif" alt="default" style="width: 120px; height: 150px;">
                </div>
                <div class="card" style="width: 100%;">
                    <div class="d-flex flex-column">
                        <div class="p-3">
                            <div class="card-title h3 fw-bold border-bottom" style="width: 100%;">
                                Nama Obat <span class="text-muted h5">00-00-0000</span>
                            </div>
                            <div>
                                Rp. <span class="text-danger">30000</span>
                            </div>
                            <div>
                                Total : 10
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
<?php 
require 'footer.html'
?>
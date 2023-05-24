<?php 
require '../functions/functions.php';
require 'header.html';

$getTicket = query("SELECT * FROM ticket");
$getRespond = query("SELECT * FROM respond");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Tiket</title>
</head>
<body>
    <div class="p-3">
        <div class="card p-3 shadow-lg d-flex flex-row flex-wrap justify-content-center gap-2 w-100">
            <?php foreach($getTicket as $gt) : ?>
            <div class="card shadow-lg p-2 w-25">
                <div class="fw-bold h4 bg-danger text-white rounded">
                    NOMOR ANTRIAN : <span><?= $gt["id"]; ?></span>
                </div>
                <div class="fw-bold">
                    PUSKESMAS : <span><?= $gt["puskesmas"]; ?></span>
                </div>
                <div class="fw-medium">
                    NAMA : <span><?= $gt["pasien"]; ?></span>
                </div>
                <div class="text-muted">
                    KELUHAN : <span><?= $gt["keluhan"]; ?></span>
                </div>
                <div>
                    STATUS : <span class="text-success">SELESAI</span>                    
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
<?php 
require 'footer.html'
?>
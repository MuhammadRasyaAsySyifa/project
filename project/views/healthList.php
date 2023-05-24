<?php 
require '../functions/functions.php';
require 'header.html';

$getPuskesmas = query("SELECT * FROM puskesmas");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>
<body>
    <div class="container p-5">
        <div class="card shadow-lg">
            <div class="card-title h1 fw-bold p-3 border-bottom">
                RUMAH SAKIT & PUSKESMAS
            </div>
            <div class="table-responsive p-3">
                <table class="table shadow-lg">
                    <thead class="text-center table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Puskesmas</th>
                            <th>Maps</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php foreach($getPuskesmas as $gp) : ?>
                        <tr>
                            <td><?= $gp["id"]; ?></td>
                            <td><img src="../assets/<?= $gp["gambar"]; ?>" alt="photo" width="50"></td>
                            <td><?= $gp["nama_puskesmas"]; ?></td>
                            <td><a class="btn btn-success" href="<?= $gp["link_map"]; ?>" target="_blank"><i class="fa-solid fa-map-location-dot"></i>&nbsp;Google Maps</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
require 'footer.html';
?>
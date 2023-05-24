<?php 
require '../functions/functions.php';
require 'header.html';

$getDoctor = query("SELECT * FROM dokter");

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
        <div class="card p-3 shadow-lg">
            <div class="h1 fw-bold border-bottom">
                DAFTAR DOKTER DAN TENAGA KESEHATAN
            </div>
            <div class="table-responsive shadow-lg">
                <table class="table">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Dokter</th>
                            <th>Spesialis</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php foreach($getDoctor as $gd) : ?>
                        <tr>
                            <td><?= $gd["id"]; ?></td>
                            <td><img src="../assets/<?= $gd["gambar"]; ?>" alt="photo" width="80"></td>
                            <td><?= $gd["nama_dokter"]; ?></td>
                            <td><?= $gd["spesialis"]; ?></td>
                            <td><a href="<?= $gd["kontak"]; ?>" target="_blank" class="btn btn-success">CONTACT</a></td>
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
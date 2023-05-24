<?php 
require '../functions/functions.php';
require 'header.html';

$getPuskesmas = query("SELECT * FROM puskesmas");
$getPoli = query("SELECT * FROM poli");

if(isset($_POST["ticket"])) {
    if(ticket($_POST) > 0) {
        echo "
        <script>
            alert('Keluhan Anda Telah Terkirim Silahkan ke Puskesmas Yang Ingin Anda Datangi');
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Keluhan Anda Gagal Terkirim');
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
</head>
<body>
    <div class="container p-3">
        <div class="card shadow-lg w-100 p-3 mt-5">
            <div class="card-title h5 fw-bold border-bottom">
                Ambil Nomor Antrian
            </div>
            <div class="card-title text-muted">
                Ambil Nomor Antrian Secara Online, Cepat, Dan Praktis
            </div>
            <form action="" method="post" class="d-flex flex-column">
                <label for="rujuk">Pilih Puskesmas :</label>
                <select class="rounded shadow-lg" id="rujuk" name="rujuk">
                    <!-- <option>Silahkan Pilih Puskesmas</option> -->
                    <?php foreach($getPuskesmas as $gp) : ?>
                        <option class="d-flex flex-column">
                        <?php 
                        $dot = ".";
                        $line = "|"; 
                        $space = "&nbsp";
                        $break = "<br>";
                            echo $gp["id"];
                            echo $dot;
                            echo $space;
                            echo $gp["nama_puskesmas"]; 
                            echo $space;
                            echo $line;
                            echo $space;
                            echo $break;
                            echo $gp["alamat_puskesmas"];
                            echo $space;
                            echo $line;
                        ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <select name="poli" id="poli    " class="mt-2">
                    <?php foreach($getPoli as $gl) : ?>
                        <option><?= $gl["poli"]; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="nama">Atas Nama :</label>
                <input type="text" id="nama" name="nama" class="rounded shadow-lg" placeholder="Masukkan Nama" required>
                <label for="keluhan">Keluhan keluhan:</label>
                <textarea type="text" id="keluhan" name="keluhan" class="rounded shadow-lg" placeholder="Masukkan keluhan" required></textarea>
                <label for="tanggal">Tanggal Antrian:</label>
                <input type="text" id="tanggal" name="tanggal" class="rounded shadow-lg" placeholder="Tanggal Pemeriksaan" required value="<?= date('l, d-M-Y'); ?>">
                <button type="submit" class="btn btn-success mt-2" id="ticket" name="ticket">Ambil Tiket Antrian</button>
            </form>
        </div>  
    </div>
</body>
</html>
<?php 
require 'footer.html';
?>
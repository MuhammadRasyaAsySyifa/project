<?php 
require 'header.html';
require '../functions/functions.php';

$id = $_GET["id"];

$getOrder = query("SELECT * FROM obat WHERE id = '$id'")[0];


if(isset($_POST["checkout"])) {

    if(order($_POST) > 0) {
        echo "
        <script>
            alert('Pembelian Obat Berhasil, Silahkan Cek Kartu Pembelian');
            window.location.href = 'medicine.php';
        </script>
        ";
    } else {
        echo 
        "<script>
            alert('Pembelian Obat Gagal');
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
    <title>Keranjang Obat</title>
</head>
<body>
    <div class="container">
        <div class="container p-3">
            <div class="card shadow-lg">
                <form action="" method="post" class="d-flex flex-column p-3 gap-1">
                    <label for="pembeli">Nama Pembeli :</label>
                    <input class="shadow-lg rounded" type="text" id="pembeli" name="pembeli" placeholder="Masukkan Nama Pembeli" required>
                    <label for="tanggal">Tanggal Pembelian :</label>
                    <input class="shadow-lg rounded" type="text" id="tanggal" name="tanggal" placeholder="Tanggal" required readonly value="<?= date('l, d-M-Y'); ?>">
                    <label for="obat">Obat Yang di Beli :</label>
                    <input class="shadow-lg rounded" type="text" id="obat" name="obat" placeholder="Nama Obat" required readonly value="<?= $getOrder["nama_obat"]; ?>">
                    <label for="harga">Harga Obat :</label>
                    <input class="shadow-lg rounded" type="number" id="harga" name="harga" placeholder="Nama Harga" required readonly value="<?= $getOrder["harga_obat"]; ?>">
                    <label for="jumlah">Jumlah Obat :</label>
                    <input class="shadow-lg rounded" type="number" id="jumlah" name="jumlah" placeholder="Jumlah Obat" required min="1" value="1" oninput="calculateTotal()">
                    <label for="total">Total Harga :</label>
                    <input class="shadow-lg rounded" type="number" id="total" name="total" placeholder="Total Harga" required readonly>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success px-5" id="checkout" name="checkout">Checkout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../functions/script.js"></script>
</body>
</html>
<?php 
require 'footer.html';
?>
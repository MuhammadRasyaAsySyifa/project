<?php 
require 'header.html';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Health C</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="../src/css/home.css" rel="stylesheet">
        <style> 
            body {
                font-family: "Times New Roman", Times, serif;
                width: 100%;
            }
                .navbar-nav .nav-link {
                    font-size: 25px; /* Ubah ukuran teks sesuai kebutuhan */}
                .navbar-brand {
                    font-size: 30px; /* Ubah ukuran teks sesuai kebutuhan */} 
                .font-family-times-new-roman {
                    font-family: "Times New Roman", Times, serif;
                }
                
        </style>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="container mt-5">
        <h1 class="font-family-times-new-roman text-danger" style="margin-top: 60px;">Solusi Kesehatan</h1>
        <p class="font-family-times-new-roman">Konsultasi dokter, pemesanan obat, pemeriksaan kesehatan, reservasi janji tamu,
        <br> layanan kesehatan keluarga, semua pasti bisa sehat!</p>
    </div>
    <hr class="mt-4">
    <div class="container p-2">
    <div class="row mt-4">
        <div class="col-md-4 mb-3">
            <div class="card shadow-lg">
                <a href="" class="card-body text-decoration-none py-2" style="min-height: 180px;">
                    <h5 class="card-title bg-danger text-white rounded p-2"><i class="fa-solid fa-user-doctor"></i>&nbsp;Konsultasi Dokter</h5>
                    <hr>
                    <p class="card-text">Dapatkan konsultasi dengan dokter terpercaya.</p>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-lg">
                <a href="medicine.php" class="card-body text-decoration-none py-2" style="min-height: 180px;">
                    <h5 class="card-title bg-danger text-white rounded p-2"><i class="fa-solid fa-pills"></i>&nbsp;Pemesanan Obat</h5>
                    <hr>
                    <p class="card-text">Pesan obat secara online dan praktis.</p>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-lg">
                <a href="ticket.php" class="card-body text-decoration-none py-2" style="min-height: 180px;">
                    <h5 class="card-title bg-danger text-white rounded p-2"><i class="fa-solid fa-stethoscope"></i>&nbsp;Pemeriksaan Kesehatan</h5>
                    <hr>
                    <p class="card-text">Lakukan pemeriksaan kesehatan secara teratur.</p>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-lg">
                <a href="" class="card-body text-decoration-none py-2" style="min-height: 180px;">
                    <h5 class="card-title bg-danger text-white rounded p-2"><i class="fa-solid fa-user-nurse"></i>&nbsp;Reservasi Janji Tamu</h5>
                    <hr>
                    <p class="card-text">Reservasi janji tamu dengan mudah.</p>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-lg">
                <a href="" class="card-body text-decoration-none py-2" style="min-height: 180px;">
                    <h5 class="card-title bg-danger text-white rounded p-2"><i class="fa-solid fa-people-group"></i>&nbsp;Layanan Keluarga</h5>
                    <hr>
                    <p class="card-text">Nikmati layanan kesehatan untuk seluruh keluarga.</p>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-lg">
                <a href="healthList.php" class="card-body text-decoration-none py-2" style="min-height: 180px;">
                    <h5 class="card-title bg-danger text-white rounded p-2"><i class="fa-solid fa-hospital"></i>&nbsp;Daftar Rumah Sakit & Puskesmas</h5>
                    <hr>
                    <p class="card-text">Lihat Daftar Rumah Sakit Dan Puskesmas Favorit Kamu Disini.</p>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card shadow-lg">
                <a href="nakesList.php" class="card-body text-decoration-none py-2" style="min-height: 180px;">
                    <h5 class="card-title bg-danger text-white rounded p-2"><i class="fa-solid fa-hospital-user"></i></i>&nbsp;Cek Dokter & Nakes</h5>
                    <hr>
                    <p class="card-text">Cek Dokter Atau Tenaga Kesehatan Disini.</p>
                </a>
            </div>
        </div>
    </div>
    </div>
    <hr>
</body>
</html>

<?php 
require 'footer.html';
?>
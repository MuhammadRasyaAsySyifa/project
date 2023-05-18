<?php 

$conn = mysqli_connect("localhost", "root", "", "db_puskesmas");

if(!$conn) {
    die("Database Gagal Terkoneksi");
} else {
    echo "Database Berhasil Terkoneksi";
}

?>
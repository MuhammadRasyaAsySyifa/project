<?php 

$conn = mysqli_connect("localhost", "root", "", "db_puskesmas");

if(!$conn) {
    die("Database Gagal Terkoneksi");
}


// Function Query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

// Function Order
function order($data) {
    global $conn;

    $pembeli = htmlspecialchars($data["pembeli"]);
    $tanggal = $data["tanggal"];
    $obat = htmlspecialchars($data["obat"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $harga = htmlspecialchars($data["total"]);

    $query = "INSERT INTO pembelian_obat VALUES (
        '', 
        '$tanggal',
        '$pembeli',
        '$obat',
        '$harga',
        '$jumlah'
    )";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ticket($data) {
    global $conn;

    $puskesmas = htmlspecialchars($data["rujuk"]);
    $pasien = htmlspecialchars($data["nama"]);
    $keluhan = htmlspecialchars($data["keluhan"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $poli = htmlspecialchars($data["poli"]);

    $query = "INSERT INTO ticket VALUES (
        '',
        '$puskesmas',
        '$pasien',
        '$keluhan',
        '$tanggal',
        '$poli'
    )";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>
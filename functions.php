<?php
//mysqli_connect
function koneksi(){
    $conn = mysqli_connect("localhost","root", "", "penjualan");

    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah_barang($data){
    $conn = koneksi();

    $nama = $data['nama_barang'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "INSERT INTO barang VALUES (null, '$nama','$harga', '$stok', '$id_supplier')";
    
    mysqli_query($conn, $sql); 

    return mysqli_affected_rows($conn);
}

function tambah_supplier($tamb){
    $conn = koneksi();

    $nama = $tamb['nama_supplier'];
    $harga = $tamb['id_supplier'];
    $stok = $tamb['no_telp'];
    $id_supplier = $tamb['alamat'];

    $sql = "INSERT INTO barang VALUES (null, '$nama_supplier','$id_supplier', '$no_telp', '$alamat')";
    
    mysqli_query($conn, $sql); 

    return mysqli_affected_rows($conn);
}
?>

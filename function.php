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

function tambah_supplier($data){
    $conn = koneksi();

    $nama = $data['nama_supplier'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];

    $sql = "INSERT INTO supplier VALUES (null, '$nama', '$no_telp', '$alamat')";
    
    mysqli_query($conn, $sql); 

    return mysqli_affected_rows($conn);
}

?>
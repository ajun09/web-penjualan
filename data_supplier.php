<!--Menampilkan Data Supp-->

<?php
require 'function.php';
$supplier = query("select * from supplier");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Daftar Supplier</h1>
    <button>
        <a href="tambah_supplier.php">Tambah Supplier</a>
    </button>
    <table border="1" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>ID. Supplier</th>
            <th>Nama Supplier</th>
            <th>No Telepon</th>
            <th>Alamat</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($supplier as $sup){?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $sup['id_supplier'];?></td>
            <td><?= $sup['nama_supplier'];?></td>
            <td><?= $sup['no_telp'];?></td>
            <td><?= $sup['alamat'];?></td>
        </tr>
        <?php $i++;?>
        <?php }?>
    </table>
</body>
</html>

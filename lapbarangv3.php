<?php
require 'model.php';
$model = new Model();
$recordBarang = $model->fetchBarang();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Barang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 style="text-align: center; color: lightSkyBlue;">TOKO PERALATAN KANTOR</h1>
    <h2>LAPORAN BARANG</h2>

    <table>
        <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA BARANG</th>
            <th>SATUAN</th>
            <th>HARGA</th>
            <th>STOK</th>
        </tr>
        <?php

        $no = 1;
        foreach ($recordBarang as $barang) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $barang['kodeBarang'] ?></td>
                <td><?= $barang['namaBarang'] ?></td>
                <td><?= $barang['satuan'] ?></td>
                <td>Rp. <?= number_format($barang['harga'], 2) ?></td>
                <td><?= $barang['stok'] ?></td>
            </tr>

        <?php
        }
        ?>

    </table>
</body>

</html>
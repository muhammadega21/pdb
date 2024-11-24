<?php
require 'model.php';
$model = new Model();
$recordBarang = $model->fetchBarang();
var_dump($recordBarang);
die;
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
            <th>KODE</th>
            <th>NAMA BARANG</th>
            <th>SATUAN</th>
            <th>HARGA</th>
            <th>STOK</th>
        </tr>
        <tr>
            <td>1001</td>
            <td>Flashdisk</td>
            <td>Pcs</td>
            <td>Rp. 50.000</td>
            <td>12</td>
        </tr>
        <tr>
            <td>1002</td>
            <td>Mouse Optioc</td>
            <td>Pcs</td>
            <td>Rp. 200.000</td>
            <td>7</td>
        </tr>
        <tr>
            <td>1003</td>
            <td>Keyboard</td>
            <td>Pcs</td>
            <td>Rp. 300.000</td>
            <td>22</td>
        </tr>
        <tr>
            <td>1004</td>
            <td>Monitor</td>
            <td>Pcs</td>
            <td>Rp. 150.000</td>
            <td>45</td>
        </tr>

    </table>
</body>

</html>
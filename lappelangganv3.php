<?php
require 'model.php';
$model = new Model();
$recordPelanggan = $model->fetchPelanggan();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pelanggan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 style="text-align: center; color: lightSkyBlue;">TOKO PERALATAN KANTOR</h1>
    <h2>LAPORAN PELANGGAN</h2>

    <table>
        <tr>
            <th>NO</th>
            <th>ID PELANGGAN</th>
            <th>NAMA PELANGGAN</th>
            <th>ALAMAT</th>
        </tr>
        <?php

        $no = 1;
        foreach ($recordPelanggan as $pelanggan) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $pelanggan['id_pelanggan'] ?></td>
                <td><?= $pelanggan['nama_pelanggan'] ?></td>
                <td><?= $pelanggan['alamat'] ?></td>
            </tr>

        <?php
        }
        ?>

    </table>
</body>

</html>
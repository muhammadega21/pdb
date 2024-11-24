<?php
require 'model.php';
$model = new Model();
$recordFaktur = $model->fetchFaktur();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Faktur</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9' crossorigin='anonymous'>
</head>

<body>
    <div class="container py-4">
        <h1 style="text-align: center; color: lightSkyBlue;">TOKO PERALATAN KANTOR</h1>
        <h2 class="text-center">FAKTUR</h2>
        <?php

        $no = 1;
        foreach ($recordFaktur as $faktur) {
        ?>
            <div style="border:1px solid black; padding: 1rem 2rem; margin-top: 1rem;">
                <div class="row d-flex justify-content-between">
                    <div class="col-6">
                        <h5>Dijual Kepada : <?= $faktur['nama_pelanggan'] ?></h5>
                        <h5>Alamat : <?= $faktur['alamat'] ?></h5>
                    </div>

                    <div class="col-6 text-end">
                        <h5>Tanggal : <?= $faktur['tanggal'] ?></h5>
                        <h5>No Faktur : <?= $faktur['id_faktur'] ?></h5>
                        <h5>Syarat Pengiriman : ...</h5>
                        <h5>Syarat Pembayaran : ...</h5>
                    </div>
                </div>

                <table class="table table-bordered mt-4">
                    <tr>
                        <th>NO</th>
                        <th>Keterangan</th>
                        <th>Unit</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah</th>
                    </tr>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $faktur['namaBarang'] ?></td>
                        <td><?= $faktur['satuan'] ?></td>
                        <td>Rp. <?= number_format($faktur['harga'], 2) ?></td>
                        <td><?= $faktur['jumlah_jual'] ?></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Jumlah</td>
                        <td>phpp</td>
                    </tr>



                </table>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>
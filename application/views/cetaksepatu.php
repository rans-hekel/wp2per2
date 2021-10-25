<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu Sejahtera</title>
    <link rel="stylesheet" type="text/css" href=<?php echo
                                                base_url() ?>assets/css/sepatu.css>
</head>

<body>
    <center>
        <table>
            <tr>
                <th class="header" colspan="3">Struk Toko Sepatu Sejahtera</th>
            </tr>
            <tr>
                <th colspan="3">
                    <hr class="untukhr">
                </th>
            </tr>
            <tr>
                <th class="teks">Nama Pembeli</th>
                <th>:</th>
                <th><?= $nama; ?></th>
            </tr>
            <tr>
                <th class="teks">No Hp</th>
                <th>:</th>
                <th><?= $nohp; ?></th>
            </tr>
            <tr>
                <th class="teks">Merk</th>
                <th>:</th>
                <th><?= $merk; ?></th>
            </tr>
            <tr>
                <th class="teks">Ukuran</th>
                <th>:</th>
                <th><?= $ukuran; ?></th>
            </tr>
            <tr>
                <th class="teks">Harga</th>
                <th>:</th>
                <th>Rp.<?= $harga; ?>,-</th>
            </tr>
            <tr>
                <th colspan="3">
                    <a href="<?= base_url(); ?>/sepatu">Balik Belanja Lagi?</a>
                </th>
            </tr>
        </table>
    </center>
</body>

</html>
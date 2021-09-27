<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url(); ?>/matakuliah/cetak" method="POST">
            <table>
                <tr>
                    <th colspan="3">Form Mata Kuliah</th>
                </tr>
                <tr>
                    <th colspan="3">
                        <hr>
                    </th>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <th><?= $kode; ?></th>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <th>:</th>
                    <th><?= $nama; ?></th>
                </tr>
                <tr>
                    <th>SKS</th>
                    <th>:</th>
                    <th><?= $sks; ?></th>
                </tr>
                <tr>
                    <th colspan="3"><a href="<?= base_url(); ?>" matakuliah>kembali</a></th>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
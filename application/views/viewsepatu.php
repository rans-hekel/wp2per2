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
        <form action="<?= base_url(); ?>/sepatu/cetak" method="post">
            <table>
                <tr>
                    <th class="header" colspan="3">Toko Sepatu Sejahtera</th>
                </tr>
                <tr>
                    <th colspan="3">
                        <hr class="untukhr">
                    </th>
                </tr>
                <tr>
                    <th class="teks">Nama Pembeli</th>
                    <th>:</th>
                    <th><input type="text" name="nama" placeholder="Input Nama Anda">
                        <?= form_error('nama', '<small style="color:red">', '<small/>'); ?></th>
                </tr>
                <tr>
                    <th class="teks">No Hp</th>
                    <th>:</th>
                    <th><input type="text" name="nohp" placeholder="Input No.Handphone Anda">
                        <?= form_error('nohp', '<small style="color:red">', '<small/>'); ?></th>
                </tr>
                <tr>
                    <th class="teks">Merk</th>
                    <th>:</th>
                    <th><select name="merk" id="merk">
                            <option value="Pilih Merk">Pilih Merk</option>
                            <option value="nike">Nike</option>
                            <option value="adidas">Adidas</option>
                            <option value="kickers">Kickers</option>
                            <option value="eiger">Eiger</option>
                            <option value="bucherri">Bucherri</option>
                        </select>
                </tr>
                <tr>
                    <th class="teks">Ukuran</th>
                    <th>:</th>
                    <th><select name="ukuran" id="ukuran">
                            <option value="Pilih Ukuran">Pilih ukuran</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                </tr>
                <tr>
                    <th colspan="3"><input type="submit" value="simpan data"></th>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
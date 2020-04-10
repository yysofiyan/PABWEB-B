<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh URL</title>
</head>
<body>
    <h1>contoh URL</url>
    <p>Base_url()</p>
    <?php echo base_url() ?>
    <br>
    <p>ini adalah gambar</p>
    <img src="<?php echo base_url('assets/baby_fox.jpg') ?>" width="450px" heigt="337px">
    <br>
    <p>2. Site_url()</p>
    <?php echo site_url() ?>
    <br>
    <p><a href="<?php echo site_url('halaman')?>">Ke Halaman View</a><p>
    </p>
    <br>
    <?php echo anchor('url/detail/1','ke halaman detail') ?>
    <br>
    <?php echo anchor('url/blank', 'ke halaman blank') ?>
</body>
</html>
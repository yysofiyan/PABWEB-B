<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Url</title>
</head>
<body>
    <h1>Contoh Url</h1>
    <p>1. Base_Url()</p>
    <?= base_url() ?>
    <br>
    <p>Ini adalah foto saya</p>
    <img src="<?= base_url('assets/img/default.png') ?>" alt="">
    <br>
    <p>2. Site Url</p>
    <?= site_url() ?>
    <br>
    <p><a href="<?= site_url('halaman') ?>">Ke halaman view</a></p>
    <br>
    <?= anchor('url/detail/1','ke halaman detail') ?>
    <br>
    <?= anchor('url/blank','ke halaman Blank') ?>
</body>
</html>
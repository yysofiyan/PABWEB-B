<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh URL</title>
</head>
    <body>
    <h1>Contoh URL</h1>
    <p>1. Base_url()</p>
    <?php echo base_url() ?>
        <br>
        <p>ini adalah gambar</p>
        <img src="<?php echo base_url('assets/mitra.jpg') ?>" width="200px" height="150px">
        <br>
        <p>2. Site_url()</p>
    <?php echo site_url() ?>

    <br>
    <p><?php echo anchor('Halaman','Ke Halaman View')?></p>

    <br>
    <?php echo anchor('url/detail/1','Ke Halaman Detail')?>

    <br>
    <?php echo anchor('url/blank','Ke Halaman Blank')?>
       
</body>
</html>
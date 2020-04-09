<h3>Tambah Data</h3>
<?= $form_open ?>
<p>
    <?= $label_nim ?>
    <?= $input_nim ?>
    <?= $error_nim ?>
</p>
<p>
    <?= $label_nama ?>
    <?= $input_nama ?>
    <?= $error_nama ?>
</p>
<p>
    <?= $label_prodi ?>
    <?= $dropdown_prodi ?>
</p>
<p>
    <?= $form_submit ?>
</p>
<?=  form_close() ?>
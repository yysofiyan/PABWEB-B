<h1>Data Mahasiswa</h1>
<table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Prodi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($prodi as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nama_prodi ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?= anchor('home', 'kembali ke home') ?>
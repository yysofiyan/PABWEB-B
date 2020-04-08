<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<?= anchor('mahasiswa/tambah_data', 'Tambah Data') ?>
<table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $row) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->nim ?></td>
                <td><?= $row->nama_mhs ?></td>
                <td><?= $row->nama_prodi ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- <?= anchor('home', 'kembali ke home') ?> -->
</body>
</html>
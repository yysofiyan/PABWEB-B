<html>
<head>
    <title>Mahasiswa</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
            <tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) {  ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->NIM ?></td>
                        <td><?php echo $row->nama_mhs ?></td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

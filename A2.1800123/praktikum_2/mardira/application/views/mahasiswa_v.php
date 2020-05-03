<h3>Data Mahasiswa</h3>
<table border="2">
        <thread>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
            </tr>
        </thread>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php echo anchor('home', 'kembali ke home') ?>
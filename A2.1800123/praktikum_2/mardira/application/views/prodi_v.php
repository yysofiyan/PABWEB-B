<h3>Data Program Studi</h3>
<table border="2">
        <thread>
            <tr>
                <th>NO</th>
                <th>Nama Prodi</th>
            </tr>
        </thread>
        <tbody>
            <?php
            $no = 1;
            foreach ($prodi as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php echo anchor('home', 'kembali ke home') ?>
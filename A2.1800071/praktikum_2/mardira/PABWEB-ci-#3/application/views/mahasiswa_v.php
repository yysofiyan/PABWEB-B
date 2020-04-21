<h3>Data Mahasiswa</h3>
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
<?= anchor('home', 'kembali ke home') ?>
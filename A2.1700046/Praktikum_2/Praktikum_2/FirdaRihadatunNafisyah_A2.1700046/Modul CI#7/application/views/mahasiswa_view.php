<title>Data Mahasiswa</title>
<h3>Data Mahasiswa</h3>
<?= anchor('mahasiswa/tambah_data', 'Tambah Data') ?>
<table border="2">
	<thead>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Mahasiswa</th>
			<th>Program Studi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no = 1;
		foreach ($mahasiswa as $row) { ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $row->NIM ?></td>
				<td><?= $row->nama_mhs ?></td>
				<td><?= $row->nama_prodi ?></td>
				<td>
					<?= anchor("mahasiswa/edit/{$row->id_mahasiswa}", "Edit") ?>
					<?= anchor("mahasiswa/hapus/{$row->id_mahasiswa}", "Hapus") ?>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<?php 
$pesan = $this->session->flashdata('pesan');
echo $pesan;
 ?>
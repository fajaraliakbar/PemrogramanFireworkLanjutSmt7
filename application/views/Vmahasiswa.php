<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
</head>
<body>
	<center>
		<h3>
			<a href="<?php echo base_url('Cmahasiswa/tambahmhs');?>">Tambah </a>
		</h3>
	</center>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIM</th>
					<th>Nama Mhs</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>No. Hp</th>
					<th>Action</th>
				</tr>
				<?php $no = 1; foreach ($mhs as $itemmhs) {?>
			</thead>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $itemmhs['nim']; ?></th>
					<th><?php echo $itemmhs['nama_mahasiswa']; ?></th>
					<th><?php echo $itemmhs['jenis_kelamin']; ?></th>
					<th><?php echo $itemmhs['alamat']; ?></th>
					<th><?php echo $itemmhs['nomer_hp']; ?></th>
					<td align ="center">
						<a href="<?php echo base_url('Cmahasiswa/editmhs/').$itemmhs['id']; ?>">Edit</a>
						<a href="<?php echo base_url('Mahasiswa/hapusmhs/').$itemmhs['id']; ?>" onclick="return confirm('Apakah Anda Yakin, Mau Menghapus data?') ">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</center>
</body>
</html>
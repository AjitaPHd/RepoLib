<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
 
	<h2>EDIT DATA</h2>
	<br/>
	<a href="halaman_admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA ANGGOTA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from anggota where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Prodi</td>
					<td><input type="text" name="prodi" value="<?php echo $d['prodi']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>
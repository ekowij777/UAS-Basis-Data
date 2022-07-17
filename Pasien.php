<html>
<head>
<title>Database Klinik_312010204</title>
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <nav>
        <a href="Index.php" class="logo">Wellcome to Klinik 312010204</a>
        <ul>
            <li><a href="Dokter.php" class="active">Dokter</a></li>
            <li><a href="Pasien.php" class="active">Pasien</a></li>
            <li><a href="Obat.php" class="active">Obat</a></li>
            <li><a href="Berobat.php" class="active">Berobat</a></li>
            <li><a href="Resep.php" class="active">Resep</a></li>
        </ul>
    </nav>

<?php
include("Connect.php");
echo'<center><h1>Klinik 312010204</h1></center>';

$sql = 'SELECT * FROM pasien';
$result = mysqli_query($conn, $sql);
echo'<h3> Tabel Pasien </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Pasien</th>
				<th>Nama Pasien</th>
				<th>Jenis Kelamin</th>
				<th>Umur</th>
			</tr>';
while ($row = mysqli_fetch_array($result))
{
	echo'<tr>
			<td>'.$row['id_pasien'].'</td>
			<td>'.$row['nama_pasien'].'</td>
			<td>'.$row['jenis_kelamin'].'</td>
			<td>'.$row['umur'].'</td>
		</tr>';
}
echo'
		</tbody>
	</thead>
</table>';

mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>
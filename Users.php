<html>
<head>
<title>Database Klinik_312010204</title>
<link rel="stylesheet" type="text/css" href="Style.css" />
</head>
<body>

<?php
include("Connect.php");
echo'<center><h1>Klinik_312010204</h1></center>';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);
echo'<h3> Tabel User </h3>
<table border="3">
	<thead>
		<tbody>
			<tr>
				<th>ID Users</th>
				<th>Username</th>
				<th>Password</th>
				<th>Nama Lengkap</th>
			</tr>';
while ($row = mysqli_fetch_array($result))
{
	echo'<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['username'].'</td>
			<td>'.$row['password'].'</td>
			<td>'.$row['nama_lengkap'].'</td>
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
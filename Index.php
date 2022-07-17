<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <nav>
        <a href="#" class="logo">Wellcome to Klinik 312010204</a>
        <ul>
            <li><a href="Dokter.php" class="active">Dokter</a></li>
            <li><a href="Pasien.php" class="active">Pasien</a></li>
            <li><a href="Obat.php" class="active">Obat</a></li>
            <li><a href="Berobat.php" class="active">Berobat</a></li>
            <li><a href="Resep.php" class="active">Resep</a></li>
        </ul>
    </nav>
    <div class="container-logout">
        <form action="" method="POST" class="login-username">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>
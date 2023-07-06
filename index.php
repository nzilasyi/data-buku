<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <div class="container-page">
        <form action="" method="POST" class="login-email">
            <h3>DATA PERPUSTAKAAN</h3>
            <h1>SMK Telkom Jakarta</h1>

            <h5>Menu</h5>
            <div class="menu">
                <ul>
                    <li><a href="form-tambah.php">Form Tambah Data</a></li>
                    <li><a href="list-buku.php">List Data Perpustakaan</a></li>
                </ul>
            </div>
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>
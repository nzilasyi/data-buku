<?php 

    include("config.php"); 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>DAFTAR LIST BUKU YANG SUDAH DITAMBAHKAN</title>
    </head>

    <body>
        <div class="container">
            <h3>Daftar Buku Perpustakaan</h3>

            <div class="tambah">
                <a href="form-tambah.php">[+] Tambah Baru</a>
            </div>

            <br>
            
            <div class="tbl">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Buku</th>
                            <th>Kategori</th>
                            <th>Pengarang</th>
                            <th>Tahun Terbit</th>
                            <th>penerbit</th>
                            <th>Harga</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM buku";
                        $query = mysqli_query($db, $sql);

                        while($buku = mysqli_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$buku['id']."</td>";
                            echo "<td>".$buku['judul_buku']."</td>";
                            echo "<td>".$buku['kategori']."</td>";
                            echo "<td>".$buku['pengarang']."</td>";
                            echo "<td>".$buku['tahun_terbit']."</td>";
                            echo "<td>".$buku['penerbit']."</td>";
                            echo "<td>".$buku['harga']."</td>";

                            echo "<td>";
                            echo "<a href='form-edit.php?id=".$buku['id']."'>Edit</a> / ";
                            echo "<a href='hapus.php?id=".$buku['id']."'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            
            <p>Total: <?php echo mysqli_num_rows($query) ?></p>

            <a href="index.php">kembali</a>
        </div>
    </body>

    <style>
        body {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(#edf2fb, #c1d3fe), url(images/bg5.jpg);
            background-position: center;
            background-size: cover;
            justify-content: center;
            align-items: center;
            display: flex;
        }
        .container{
            width: 700px;
            min-height: 100px;
            background: #FFF;
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            padding: 40px 30px;
            position: relative;
            margin: 100px auto;
            text-align: center;
        }    
        a{
            text-decoration: none;
            color: #765bf0;
            font-size: 20px;
        }  
        h3{
            color: #000;
            font-family: 'poppin';
            font-weight: 400;
            font-size: 32px;
        }
        .tambah{
            top: -20px;
            position: relative;
        }
        table {
            position: relative;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</html>
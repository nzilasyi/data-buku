<?php

    include("config.php");

    // kalau tidak ada id di query string
    if( !isset($_GET['id']) ){
        header('Location: list-buku.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM buku WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $buku = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Edit Siswa | SMK Coding</title>
    </head>

    <body>
        <div class="container">
            
            <h3>Formulir Edit Data Buku</h3>

            <form action="proses-edit.php" method="POST" class="login-email">

                <fieldset>

                    <input type="hidden" name="id" value="<?php echo $buku['id'] ?>" />

                    <label for="judul_buku">Judul buku : </label>
                    <div class="input-group">
                        <input class="input" type="text" name="judul_buku" placeholder="judul_buku" value="<?php echo $buku['judul_buku'] ?>" />
                    </div>

                    <label for="kategori">kategori : </label>
                    <div class="input-group">
                        <?php $kategori = $buku['kategori']; ?>
                        <select name="kategori" class="input">
                            <option <?php echo ($kategori == 'novel') ? "selected": "" ?>>Novel</option>
                            <option <?php echo ($kategori == 'fiksi') ? "selected": "" ?>>Fiksi</option>
                            <option <?php echo ($kategori == 'nonfiksi') ? "selected": "" ?>>Non-fiksi</option>
                            <option <?php echo ($kategori == 'sejarah') ? "selected": "" ?>>Sejarah</option>
                            <option <?php echo ($kategori == 'manga') ? "selected": "" ?>>Manga</option>
                        </select>
                    </div>

                    <label for="pengarang">pengarang : </label>
                    <div class="input-group">
                        <input class="input" type="text" name="pengarang" placeholder="pengarang" value="<?php echo $buku['pengarang'] ?>" />
                    </div>

                    <label for="tahun_terbit">Tahun Terbit : </label>
                    <div class="input-group">
                        <input class="input" type="number" name="tahun_terbit" placeholder="tahun_terbit" value="<?php echo $buku['tahun_terbit'] ?>" />
                    </div>

                    <label for="penerbit">penerbit : </label>
                    <div class="input-group">
                        <input class="input" type="text" name="penerbit" placeholder="penerbit" value="<?php echo $buku['penerbit'] ?>" />
                    </div>

                    <label for="harga">Harga : </label>
                    <div class="input-group">
                    <input class="input" type="number" name="harga" placeholder="nama sekolah" value="<?php echo $buku['harga'] ?>" />
                    </div>

                    <div class="submit">
                    <input type="submit" value="Simpan" name="simpan" class="btn"/>
                    </div>

                </fieldset>


            </form>
        </div>
    </body>

        <style>
        body {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(#edf2fb, #c1d3fe, #edf2fb ), url(images/bg5.jpg);
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        fieldset{
            padding: 15px;
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
        }
        .container{
        width: 500px;
        min-height: 200px;
        background: #FFF;
        border-radius: 20px;
        box-shadow: 0 0 5px rgba(0,0,0,.3);
        padding: 40px 30px;
        position: relative;
        margin: 100px auto;
        text-align: center;
        }        
        .container .login-email .input-group {
        width: 100%;
        padding: 40px;
        height: 10px;
        margin-bottom: 20px;
        position: relative;
        left: -20px;
        }
        h3{
            position: relative;
            margin-bottom: 20px;
            margin-top: -20px;
            padding:10px;
            text-align: center;
            font-size: 2rem;
        }
        li{
            position: relative;
            display: inline-block;
            padding: 5px;
        }
        ul{
            position: relative;
            top: -40px;
            left: 30%;
            padding:10px;
            list-style: none;
            width: 120px;
            min-height: 40px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            align: center;
        }
        .input{
            border-radius: 20px;
            padding: 7px;
            width: 60%;
            position: relative;
            bottom: 10px;
            left: -15px;
            top: -10px;
        }
        label{
        position: relative;
        font-size: 20px;
        color: #000;
        top: 10px;
        }

        .submit{
        text-align: center;
        margin-bottom: 15px;
        }
        .submit .btn{
        width: 80%;
        padding: 15px 20px;
        text-align: center;
        border: none;
        background: #a29bfe;
        outline: none;
        border-radius: 250px;
        font-size: 1rem;
        color: #FFF;
        cursor: pointer;
        transition: .3s;
        }
        .submit .btn:hover {
        transform: translateY(-5px);
        background: #4e4c57;
        }
    </style>

</html>
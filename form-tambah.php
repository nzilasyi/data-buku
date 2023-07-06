<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Buku Baru</title>
</head>

<body>
    <div class="container">

        <h3>Tambah Data Buku Baru</h3>

        <!-- proses ini akan di olah oleh file proses-pendaftaran.php -->
        <form action="proses-tambah.php" method="POST" class="login-email">

            <fieldset>
                <label for="judul_buku">judul buku : </label>
                <div class="input-group">
                    <input type="text" name="judul_buku" placeholder="Judul buku" class="input" required>
                </div>

                <label for="kategori">Kategori : </label>
                <div class="input-group">
                    <select name="kategori" class="input" required>
                        <option>Novel</option>
                        <option>Fiksi</option>
                        <option>Non-Fiksi</option>
                        <option>Sejarah</option>
                        <option>Manga</option>
                    </select>
                </div>

                <label for="pengarang">Pengarang : </label>
                <div class="input-group">
                    <input type="text" name="pengarang" placeholder="nama pengarang" class="input" required>
                </div>

                <label for="tahun_terbit">Tahun terbit : </label>
                <div class="input-group">
                    <input type="date" name="tahun_terbit" placeholder="Tahun terbit" class="input" required>
                </div>

                <label for="penerbit">Penerbit : </label>
                <div class="input-group">
                    <input type="text" name="penerbit" placeholder="penerbit" class="input" required>
                </div>

                <label for="harga">Harga : </label>
                <div class="input-group">
                    <input type="number" name="harga" placeholder="Harga" class="input" required>
                </div>

                <div class="submit">
                    <input type="submit" value="tambah" name="tambah" class="btn" />
                </div>

            </fieldset>

        </form>
    </div>
</body>

<style>
    body {
        width: 100%;
        min-height: 100vh;
        background: linear-gradient(#edf2fb, #c1d3fe), url(images/bg5.jpg);
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    fieldset {
        padding: 15px;
        border-radius: 20px;
        box-shadow: 0 0 5px rgba(0, 0, 0, .3);
    }

    .container {
        width: 500px;
        min-height: 200px;
        background-color: #FFF;
        border-radius: 20px;
        box-shadow: 0 0 5px rgba(0, 0, 0, .3);
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

    h3 {
        position: relative;
        margin-bottom: 20px;
        margin-top: -20px;
        padding: 10px;
        text-align: center;
        font-size: 2rem;
    }

    li {
        position: relative;
        display: inline-block;
        padding: 5px;
    }

    ul {
        position: relative;
        top: -40px;
        left: 30%;
        padding: 10px;
        list-style: none;
        width: 120px;
        min-height: 40px;
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 0 5px rgba(0, 0, 0, .3);
        align: center;
    }

    .input {
        border-radius: 20px;
        padding: 7px;
        width: 60%;
        position: relative;
        bottom: 10px;
        left: -15px;
        top: -10px;
    }

    label {
        position: relative;
        font-size: 20px;
        color: #000;
        top: 10px;
    }

    .submit {
        text-align: center;
        margin-bottom: 15px;
    }

    .submit .btn {
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
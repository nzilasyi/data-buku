<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $judul_buku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];

    // buat query update
    $sql = "UPDATE buku SET judul_buku='$judul_buku', kategori='$kategori', pengarang='$pengarang', tahun_terbit='$tahun_terbit', penerbit='$penerbit', harga = '$harga' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        echo "<script> alert ('Edit Data Berhasil !!!'); document.location.href = 'list-buku.php' </script>";
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
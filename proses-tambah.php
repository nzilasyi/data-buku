<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){ //jika button daftar di klik

    // ambil data dari formulir
    $judul_buku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];

    // buat query
    $sql = "INSERT INTO buku (judul_buku, kategori, pengarang, tahun_terbit, penerbit, harga) VALUE ('$judul_buku', '$kategori', '$pengarang', '$tahun_terbit', '$penerbit', '$harga')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script> alert ('Tambah Data Berhasil !!!'); document.location.href = 'index.php' </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<script> alert ('Tambah Data Gagal !!!'); document.location.href = 'index.php' </script>";
    }


} else {
    die("Akses dilarang...");
}

?>
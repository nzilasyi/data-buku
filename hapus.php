<?php

include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM buku WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        echo "<script> alert ('Hapus Data berhasil !!!'); document.location.href = 'list-buku.php'; </script>";
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
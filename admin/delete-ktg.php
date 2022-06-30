<?php

include("../core/core.php");

if( isset($_GET['id']) ){

  // ambil id dari query string
  $id_kategori = $_GET['id'];

  // buat query hapus
  $sql = "DELETE FROM kategori WHERE id_kategori=$id_kategori";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query hapus berhasil?
  if( $query ){
    header('Location: ../admin/page-ktg.php');
  } else {
    die("gagal menghapus...");
  }

} else {
  die("akses dilarang...");
}

?>

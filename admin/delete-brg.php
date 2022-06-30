<?php

include("../core/core.php");

if( isset($_GET['id']) ){

  // ambil id dari query string
  $id = $_GET['id'];

  // buat query hapus
  $sql = "DELETE FROM barang WHERE id = $id";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query hapus berhasil?
  if( $query ){
    header('Location: ../admin/page-index2.php#barang');
  } else {
    die("gagal menghapus...");
  }

} else {
  die("akses dilarang...");
}

?>

<?php

include '../core/core.php';

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit_ktg'])){

  // ambil data dari formulir
  $id_kategori = $_POST['id'];
  $nama = $_POST['ktg'];

  // buat query update
  $sql = "UPDATE kategori SET nama='$nama' WHERE id_kategori='$id_kategori'";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query update berhasil?
  if( $query ) {
    // kalau berhasil alihkan ke halaman page-sppd.php
    header('Location:../admin/page-ktg.php');
  } else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
  }

} else {
  die("Akses dilarang...");
}

?>

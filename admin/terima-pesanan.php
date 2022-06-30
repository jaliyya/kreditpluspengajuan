<?php
include("../core/core.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tr'])){

  // ambil data dari formulir
  $id = $_POST['id'];
  // $st = 'Diterima';

  // buat query
  $sql = "UPDATE verifikasi SET status= 'Diterima' WHERE id=$id";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // buat query update

  // apakah query simpan berhasil?
  if( $query ) {
    header('location: ../admin/page-index2.php#verifikasi');
    echo "Sukses";
  } else {
    alert("Hello! Maaf! Pesanan kamu tidak dapat diproses!");
    echo "Gagal";
  }

} else {
  die("Akses dilarang...");
}

?>

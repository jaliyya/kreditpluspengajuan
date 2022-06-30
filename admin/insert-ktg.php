<?php
include("../core/core.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tbh_ktg'])){

  // ambil data dari formulir
  $ktg = $_POST['ktg'];

  // buat query
  $sql = "INSERT INTO kategori VALUES ('', '$ktg')";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query simpan berhasil?
  if( $query ) {
    header('location: ../admin/page-ktg.php');
    // echo "Sukses";
  } else {
    alert("Hello! Maaf! Barang tidak dapat ditambah!");
    // echo "Gagal";
  }

} else {
  die("Akses dilarang...");
}

?>

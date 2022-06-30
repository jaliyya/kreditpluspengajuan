<?php
include("../core/core.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tbh_brg'])){

  // ambil data dari formulir
  $nm = $_POST['nm'];
  $hrg = $_POST['hrg'];
  $ktg = $_POST['ktg'];
  $stk = $_POST['stk'];
  $kode_barang = $_POST['kode_barang'];

  // buat query
  $sql = "INSERT INTO barang VALUES ('', '$nm', '$hrg', '$ktg', '$stk', '$kode_barang')";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query simpan berhasil?
  if( $query ) {
    header('location: ../admin/page-index2.php#barang');
    // echo "Sukses";
  } else {
    alert("Hello! Maaf! Barang tidak dapat ditambah!");
    // echo "Gagal";
  }

} else {
  die("Akses dilarang...");
}

?>

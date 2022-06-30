<?php
include("../core/core.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['credit'])){

  // ambil data dari formulir
  $nam = $_POST['nam'];
  $name = $_POST['name'];
  $sts = $_POST['sts'];
  $metode = $_POST['metode'];
  $waktu = $_POST['waktu'];
  $jenis = $_POST['jenis'];
  $qty = $_POST['qty'];
  $kode_barang = $_POST['kode_barang'];

  // buat query

  $sql = "INSERT INTO verifikasi VALUES ('', '$nam', '$name', '$sts', '$metode', '$waktu', '$jenis', '$qty', '$kode_barang')";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query simpan berhasil?
  if( $query ) {
    header('location: ../user/page-index.php#info');
    // echo "Sukses";
  } else {
    alert("Hello! Maaf! Pesanan kamu tidak dapat diproses!");
    // echo "Gagal";
  }

} else {
  die("Akses dilarang...");
}

?>

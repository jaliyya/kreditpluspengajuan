<?php
include("../core/core.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tbh_psn'])){

  // ambil data dari formulir
  $name = $_POST['nm'];
  $eml = $_POST['eml'];
  $msg = $_POST['msg'];
  // buat query
  $sql = "INSERT INTO pesan VALUES ('', '$name', '$eml','$msg')";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

  // apakah query simpan berhasil?
  if( $query ) {
    echo "<script>alert('Terimakasih atas saran nya...');window.location.href='../user/page-index.php#contact';</script>";
  } else {
    alert("");
echo "<script>alert('Hello! Maaf! Pesan kamu tidak dapat dikirim!');window.location.href='../user/page-index.php#contact';</script>";
    // echo "Gagal";
  }

} else {
  die("Akses dilarang...");
}

?>

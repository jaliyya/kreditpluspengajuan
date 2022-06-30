<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "../images/upload/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");
$hits = $_POST['hits'];

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "<script type='text/javascript'>";
  echo "alert('$nama_file sukses terkirim');";
  echo "</script>";
  header('location: ../user/page-index.php');
  $konek = mysqli_connect("localhost","root","","kredit");

  $query = "INSERT INTO upload (nama_file, deskripsi, tgl_upload, hits) VALUES('$nama_file', '$_POST[deskripsi]', '$tgl_upload', '$hits')";

  mysqli_query($konek, $query);
}
else{
  echo "File gagal di upload";
}
?>

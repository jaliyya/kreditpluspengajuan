<?php
include("../core/core.php");

  // buat query
  $sql = "UPDATE `verifikasi` SET `status` = 'Diterima' WHERE `verifikasi`.`id` = $id ";
  $query = mysqli_query($connect, $sql)or die(mysqli_error($connect));

?>

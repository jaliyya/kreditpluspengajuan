<?php

session_start();
if (!isset($_SESSION["admin"])) {
  header("Location: index.php");
}elseif (!isset($_SESSION["user"])) {
  header("Location: index.php");
}

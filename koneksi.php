<?php
$koneksi = mysqli_connect("localhost","root","","contact_form");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>
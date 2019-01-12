<?php
$conn = mysqli_connect('db', 'user', 'test', "myDb");
  if($conn){
    echo "koneksi berhasil";}
  else{
    echo "koneksi gagal";}
?>

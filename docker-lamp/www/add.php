<html>
<title>add</title>
<body>
<?php
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];

 include "koneksi.php";
 $sql = "insert into Person (nama,alamat) values ('$nama','$alamat')";
 $hasil = mysqli_query($conn,$sql);
 if (!$hasil){
     echo "<br/>";
     echo "gagal simpan";
     echo "mysqli_error($conn)";
     echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
       }
 else{
     echo "<br/>";
     echo "<font color='green'>Data added successfully.";
     echo "<br/><a href='index.php'>View Result</a>"; 
      }


?>
</body>
</html>

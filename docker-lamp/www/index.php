<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 
  <style>
    .tombol{
      text-decoration: none;
      background-color: #eeeeee;
      color: black;
      padding: 2px 6px 2px 6px;
      border: 1px solid #c2c2c2;
      border-radius:2px
    }
  </style>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<a href="del.php" class='tombol'><b>Delete</b></a>
<a href="add.html" class='tombol'><b>Add</b></a>
    <div class="container">
    <?php echo "<h1>DAFTAR SISWA BARU</h1>"; ?>

    <?php

    // Connexion et sélection de la base
    $conn = mysqli_connect('db', 'user', 'test', "myDb");

    $query = 'SELECT * From Person';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead>
             <tr>
              <th>no</th>
              <th>nama</th>
              <th>alamat</th>
              </tr>
          </thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        //echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }

    /* Libération du jeu de résultats */
    $result->close();

    mysqli_close($conn);

    ?>
 </div>
</body>
</html>

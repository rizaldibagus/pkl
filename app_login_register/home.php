<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">
  </head>
<body>
    
    <h1>CRUD OOP</h1>
    <h2>WWW.MALASNGODING.COM</h2>
    <h3>Data User</h3>

    <div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">CakPri Teknologi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active mr-3">
      <a href="home.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Home</a>
      </li>

      <li class="nav-item active mr-3">
        <a href="input.php" class="form-inline my-4 my-lg-0 btn btn-secondary">Input Data</a>
      </li>

      <li class="nav-item active">
      <a href="up_foto.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Upload Data + Foto</a>
      </li>
    </ul>
    

    <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>

  </div>
</nav>

<table border="1px">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Opsi</th>
    </tr>
    <?php
        $no = 1;
        foreach ($this->tampil_data() as $x ) {
            ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $x['nama'];?></td>
        <td><?= $x['alamat'];?></td>
        <td><?= $x['usia'];?></td>
        <td>
            <a href="edit.php?id=<?= $x['id']; ?>&aksi=edit">Edit</a>
            <a href="proses.php?id=<?= $x['id'];?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php 
        }
        ?>
</table>

<!-- Tabel Baru -->
<table class="table table-bordered">
    <tr>
        <th width="20%">Nama</th>
        <th width="20%">Kontak</th>
        <th width="40%">Alamat</th>
        <th width="20%">Foto</th>
    </tr>
    <?php 
    $data = mysqli_query($db->conn,"SELECT * FROM user");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td>  <?= $d['user_nama'] ?>  </td>
        <td>  <?= $d['user_kontak'] ?>  </td>
        <td>  <?= $d['user_alamat'] ?>  </td>
        <td><img src="gambar/<?= $d['user_foto'];?>" width="35" height="40"></td>
    </tr>
    <?php    
    }
    ?>
</table>
    
</body> 
</html>
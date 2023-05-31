<!--tampil database-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">CRUD PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Data pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tambah pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Edit pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
    <div class="container mt-5">
        <h1>Hello, world!</h1>
        <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Avatar</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <!--perulangan panggil koneksi db-->
             <tr class="">
                <?php
                    include "dbkoneksi.php";
                    $query = mysqli_query($db, "SELECT * FROM user");
                    while ($data = mysqli_fetch_array($query)){
                ?>
                <td><?php echo $data['No'];?></td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-primary">Detail</button>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Hapus</button>
                </div>
                </td>
                <td></td>
                <td><?php echo $data['Nama'];?></td>
                <td><?php echo $data['Email'];?></td>
                <td><?php echo $data['Phone'];}?></td>
                <td>admin</td>
                
            </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
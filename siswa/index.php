<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Crud</title>
  </head>
  <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Siswa<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">Guru <span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
        
        

        <center><h2>Siswa</h2></center>
        <!-- CARDs -->
        <div class="container col-md-11">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
                <center><a href="create.php" class="btn btn-primary">Tambah Data</a></center>
            </div>
            <div class="card-body">
                <!-- TABLE SISWA -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            include'../database.php';
                            $siswa =  new Siswa();
                            $no = 1;
                            foreach ($siswa->index() as $data){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $data['nis'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['jenis_kelamin'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td><?php echo $data['jurusan'] ?></td>
                        <td><?php echo $data['kelas'] ?></td>
                        <td>
                            
                            <form action="proses.php" method="post">
                            <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-warning" data-toggle="tooltip" title="Show!"><i class="bi bi-eye"></i> </a> ||
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success" data-toggle="tooltip" title="Edit!"><i class="bi bi-pencil-square"></i> </a> ||
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" title="Delete!" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                            <i class="bi bi-trash3"></i> 
                            </button>
                           </form>
                        </td>
                        </tr>
                      <?php
                            }
                        ?>
                    </tbody>
                </table>
                 <!-- /TABLE SISWA -->
            </div>
        </div>
        </div>
        <br>

        <script>
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            });
        </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
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
                <a class="nav-link" href="index.php">Siswa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
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
        <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Siswa
            </div>
            <div class="card-body">
            <?php
                include '../database.php';
                $siswa = new Siswa();
                foreach ($siswa->edit($_GET['id']) as $data) {
                    $id = $data['id'];
                    $nis = $data['nis'];
                    $nama = $data['nama'];
                    $jenis_kelamin = $data['jenis_kelamin'];
                    $alamat = $data['alamat'];
                    $jurusan = $data['jurusan'];
                    $kelas = $data['kelas'];
                }
            ?>
            <form action="../siswa/proses.php" method="post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIS</label> 
                        <input type="text" class="form-control" name="nis" value="<?php echo $nis; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Jenis Kelamin</label>
                        <div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="Laki-Laki"<?php if($jenis_kelamin == "Laki-Laki") echo "checked"; ?> name="jenis_kelamin">Laki Laki
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" value="Perempuan"<?php if($jenis_kelamin == "Perempuan") echo "checked"; ?> name="jenis_kelamin">Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>">
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jurusan</label>
                            <select id="inputPendidikan" name="jurusan" class="form-control">
                                <option selected><?php echo $jurusan; ?></option>
                                <option value="RPL">RPL</option>
                                <option value="TKRO">TKRO</option>
                                <option value="TBSM">TBSM</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kelas</label>
                            <select id="inputPendidikan" name="kelas" class="form-control">
                                <option selected><?php echo $kelas; ?></option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                    </div>
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
        </div>
        <br>


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
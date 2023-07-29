<?php
include '../database.php';
$siswa = new Siswa();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];

    if ($aksi == "create"){
        $siswa->create($nis,$nama,$jenis_kelamin,$alamat,$jurusan,$kelas);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $siswa->update($id, $nis,$nama,$jenis_kelamin,$alamat,$jurusan,$kelas);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $siswa->delete($id);
        header("location:index.php");
    }
}
?>
<?php
    class Siswa extends Database
    {
        // menampilkan data siswa ke index.php
        public function index()
        {
            $datasiswa = mysqli_query($this->koneksi, "select * from siswa");

            return $datasiswa;
        }

        public function create($nis,$nama,$jenis_kelamin,$alamat,$jurusan,$kelas)
        {
            mysqli_query($this->koneksi,
                        "insert into siswa values (null,'$nis','$nama','$jenis_kelamin','$alamat','$jurusan','$kelas')"
                    );

        }
        // memilih data siswa yang akan diubah
        public function edit($id)
        {
            
            $datasiswa = mysqli_query($this->koneksi, 
                        "select * from siswa  where id='$id'"
                    );

            return $datasiswa;
        }
        // merubah data siswa
        public function update($id,$nis,$nama,$jenis_kelamin,$alamat,$jurusan,$kelas)
        {
            mysqli_query(
                $this->koneksi,
                "update siswa set nis='$nis', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat',
                   jurusan='$jurusan', kelas='$kelas' where id='$id'"
            );
        }

        // menampilkan data siswa berdasarkan id
        public function show($id)
        {
            $datasiswa = mysqli_query($this->koneksi, 
                        "select * from siswa where id='$id'"
                    );

            return $datasiswa;
        }

         // menghapus data siswa
         public function delete($id)
         {
             mysqli_query($this->koneksi, "delete from siswa where id='$id'"
                     );
 
         }
    }
?>
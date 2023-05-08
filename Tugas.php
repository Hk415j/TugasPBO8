<?php
    class mahasiswa{
        public $nim = 29383297;
        public $nama = "Naufal IH";
        public $jurusan = "XI PPLG";

        function tampil_biodata(){
            echo $this->nim;
            echo $this->nama;
            echo $this->jurusan;
        }
    }
    $tampil = new mahasiswa();
    $tampil->tampil_biodata(); 
    ?>
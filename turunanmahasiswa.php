<?php
    class mahasiswa{
        //properti
        public $nim;
        public $nama;
        public $jurusan;

        //method
        function cetakinfo(){
            echo "anda mengakses method info mahasiswa ";
        }
    }
    class mahasiswas1 extends mahasiswa{
        //properti
        public $anggun;

        //method
        function skripsi(){
            echo "Anggun telah melesaikan S1 nya di IWIMA pekalongan";
        }

    }
    //buat objek dari warisan buah 
    $kusuma = new mahasiswas1();
    $kusuma->skripsi();

    echo "<br>";


    class mahasiswas2 extends mahasiswa{
        //properti
        public $nazila;

        //method
    function tesis(){
        echo " Nazila telah melesaikan S2 nya di UNIVERSITY OF OXFORD";
    }

    }
    //buat objek caycar 
    $rizki= new mahasiswas2();
    $rizki->tesis();
?>
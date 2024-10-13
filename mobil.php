<?php
    class mobil{
        //properti
        public $nama;
        public $merk;

        //method
        function cetakinfo(){
            echo "anda mengakses method info buah ";
        }
    }
    class mobilsport extends mobil{
        //properti
        public $sport;

        //method
        function turbo(){
            echo "mobil sport pajero kecepatan nya sangat tinggi dan";
        }

    }
    //buat objek dari warisan buah 
    $pajero = new mobilsport();
    $pajero->turbo();

    echo "<br>";


    class carycar extends mobil{
        //properti
        public $model;

        //method
    function irit(){
        function sensor(){
            echo " ada sensor yang canggih";
        }
            echo " mobil daihatsu grand max sangat irit bensinnya dan";
            sensor();
        }
    }


    //buat objek caycar 
    $daihatsu= new carycar();
    $daihatsu->irit();
?>
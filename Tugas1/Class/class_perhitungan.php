<?php
class perhitungan{
    var $bil1, $bil2, $bil3;

    function luasPersegi($bil1){
        $bil3=$bil1*$bil1;
        return "Sisi =".$bil1."<br> Luas =".$bil1."x".$bil1." <br> Hasil :".$bil3;
    }

    function luasPersegiPanjang($bil1, $bil2){
        $bil3=$bil1*$bil2;
        return "Panjang =".$bil1."<br> Lebar =".$bil2."<br> Luas =".$bil1."x".$bil2." <br> Hasil :".$bil3;
    }

    function luasSegitiga($bil1, $bil2){
        $bil3=$bil1*$bil2/2;
        return "Alas =".$bil1."<br> Tinggi =".$bil2."<br> Luas = 1/2 x".$bil1."x".$bil2."<br> Hasil :".$bil3;
    }
}
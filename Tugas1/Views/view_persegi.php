<?php

require('../Class/class_persegi.php');

// Object adalah instance dari class. Jika class secara umum mepresentasikan (template) 
// sebuah object, sebuah instance adalah representasi nyata dari class itu sendiri.
//instansiasi class persegi
$hitung = new persegi();
 

//memanggil method luas dari class persegi
echo $hitung->luas(4);
 
//memanggil method warna_kulit dari class persegi
echo $hitung->keliling(4);

?>





<?php

require('../Class/class_segitiga.php');

// Object adalah instance dari class. Jika class secara umum mepresentasikan (template) 
// sebuah object, sebuah instance adalah representasi nyata dari class itu sendiri.
//instansiasi class persegi
$hitung = new segitiga();
 

//memanggil method luas dari class persegi
echo $hitung->luas(4, 5);

?>





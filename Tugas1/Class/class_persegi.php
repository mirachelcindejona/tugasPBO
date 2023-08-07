<?php

// Class adalah prototype, atau blueprint, atau rancangan yang mendefinisikan 
// variable dan method-methode pada seluruh objek tertentu. Class berfungsi untuk menampung isi 
// dari program yang akan di jalankan, di dalamnya berisi atribut / type data dan method 
// untuk menjalankan suatu program.


//Membuat Class
class persegi{

    //property
    var $sisi;
    var $hasil;
    
    // Method merupakan suatu operasi berupa fungsi-fungsi yang dapat dikerjakan 
    // oleh suatu object. Method didefinisikan pada class akan tetapi dipanggil melalui object.
    //method
    function luas($sisi){
        $hasil=$sisi*$sisi;
        return "Hasil Luas Persegi : ".$hasil."<br>";
    }
    
    function keliling($sisi){
        $hasil=$sisi+$sisi+$sisi+$sisi;
        return "Hasil Keliling Persegi : ".$hasil."<br>";
    }
    
}
?>
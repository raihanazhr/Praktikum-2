<?php
// contoh function tidak menggunakan parameter
function nama (){
    $nama = "raihanah zahira";
    echo "nama saya adalah";
};

//contoh function parameter
function umur_kelas($age){
    $umur = $age - 2023;
    $kelas = "SI15";
    echo "<br/>umur saya sekarang adalah $umur <br/> saya kelas $kelas";
};
nama();
umur_kelas(2002);
?>
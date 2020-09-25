<?php

//CONSTANT = KONSTANTA

// define('NAMA', 'Rakeyan N'); // tidak bisa disimpan didalam kelas, bersifat global

// echo NAMA;
// echo "<br>";

// const UMUR = 99; // dapat disimpan di kelas, biasa di gunakan OOP

// echo UMUR;


//OOP
// class Coba{

//     const NAMA = 'Rakeyan';
// }

// echo Coba::NAMA;



echo __LINE__; // magic constant menampilkan baris kodingan
echo "<br>";
echo __FILE__; // menampilkan alamat file
echo "<br>";
echo __DIR__; // mengetahui direktori file

echo "<hr>";

// function coba(){
//     return __FUNCTION__; // menentukan kita berada di function mana
// }

// echo coba();

class Coba{

    public $kelas = __CLASS__; // menampilkan keberadaan kelas

}

$obj = new Coba;

echo $obj->kelas;
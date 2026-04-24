<?php
//constant adalah sebuah cara mendeklariskan sebuah varibel yang tidak dapat di ubah
//dengan ada dua cara pemanggilan
//rumus
//define(nama varibael,value);
define("nama", "agus <br>");

class j {
const namas = "budi";
}
echo nama;
echo j::namas;

//dimana define tidak dapat digunakan pada sebuah class maka dari itu lebih baik menggunakan const jika menggunakan oop

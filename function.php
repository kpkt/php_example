<?php
/**
 * Fungsi operasi tambah
 */
//Perlu menerima 3 parameter
function tambah($param1, $param2, $param3 = 1){
    return $param1 + $param2 + $param3;
}

/**
 * Fungsi operasi darab
 */
//Perlu menerima 3 parameter
function darab($param1, $param2, $param3 = 1){
    return $param1 * $param2 * $param3;
}


$a = 3;
$b = 6;
$c = 5;
//Panggil fungsi bernama tambah
//Dengan 3 parameter
echo tambah($a,$c,$b);

echo '<br/>';
//Panggil fungsi bernama tambah
//Dengan 3 parameter
echo tambah($a,$b);

echo '<br/>';
//Panggil fungsi bernama darab
//Dengan 3 parameter
echo darab($a,$b);
<?php
/**
 * Fungsi operasi tambah
 */
//Perlu menerima 3 parameter
function tambah($param1, $param2, $param3 = 1)
{
    return $param1 + $param2 + $param3;
}

/**
 * Fungsi operasi darab
 */
//Perlu menerima 3 parameter
function darab($param1, $param2, $param3 = 1)
{
    return $param1 * $param2 * $param3;
}

/**
 * Fungsi operasi tolak
 */
//Perlu menerima 3 parameter
function tolak($param1, $param2, $param3 = 1)
{
    if (semak_int($param1) && semak_int($param2) && semak_int($param3)) {
        return $param1 - $param2 - $param3;
    } else {
        return 'Sila semak nilai parameter';
    }

}

/**
 * Fungsi semak parameter
 * @param $param
 * @return bool
 */
function semak_int($param)
{
    return is_numeric($param) ? true : false;
}


$a = 3;
$b = 6;
$c = 5;
//Panggil fungsi bernama tambah
//Dengan 3 parameter
echo tambah($a, $c, $b);

echo '<br/>';
//Panggil fungsi bernama tambah
//Dengan 3 parameter
echo tambah($a, $b);

echo '<br/>';
//Panggil fungsi bernama darab
//Dengan 3 parameter
echo darab($a, $b);

echo '<br/>';
//Panggil fungsi bernama tolak
//Dengan 3 parameter
echo "hasil tolak $a - $b - $c = ".tolak($a, $b, $c);
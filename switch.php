<?php
/**
 * Perbandingan Switch
 */
$warna = 'hijau';

switch ($warna):
    case 'merah':
        echo "Ini bukan warna kegemaran saya";
        break;
    case 'biru';
        echo "Ini ada lah warna kegemaran jiran saya";
        break;
    default:
        echo "Saya suka warna selain dari biru dan merah";
endswitch;

echo '<br/>';

if($warna === "hijau"){
    echo "Ini bukan warna kegemaran saya";
}elseif ($warna === "biru"){
    echo "Ini ada lah warna kegemaran jiran saya";
}else{
    echo "Saya suka warna selain dari biru dan merah";
}
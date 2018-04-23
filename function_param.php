<?php
function darab($param)
{
    return $param[0] * $param[1] * $param[2];
}

function darab_nama($param)
{
    if (is_array($param)) {
        return $param['nombor1'] * $param['nombor2'] * $param['nombor3'];
    }
    return false;
}

#php56 array()
#php7 []
$array = [2, 6, 7];

echo darab($array);
echo '<br/>';

$array = ['nombor1' => 2, 'nombor2' => 6, 'nombor3' => 7];
echo darab_nama($array);








<?php
/**
 * Created by PhpStorm.
 * User: makmal01
 * Date: 4/23/2018
 * Time: 10:47 AM
 */
$nokp1 = 111111122211;

if(is_numeric($nokp1)){
    echo "No KP : $nokp1 adalah sah";
}else{
    echo "No KP : $nokp1 adalah tidak sah";
}
if(!is_numeric($nokp1)){
    echo true;
}else{
    echo false;
}

echo is_numeric($nokp1) ? true : false;

echo '<br/>';
echo is_numeric($nokp1) ? "No KP : $nokp1 adalah sah" : "No KP : $nokp1 adalah tidak sah";


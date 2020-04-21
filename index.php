<?php

use KK\Log;
use KK\QuadraticEq;
use KK\KKException;

include 'core/EquationInterface.php';
include 'core/LogInterface.php';
include 'core/LogAbstract.php';
include 'KK/KKException.php';
include 'KK/LinearEq.php';
include 'KK/QuadraticEq.php';
include 'KK/Log.php';

$eq=new QuadraticEq();

$a=0;
$b=0;
$c=0;

try {
    function entercheck($num,$letter)
    {
        $pattern = '#^[0-9]*[.]?[0-9]+$#';
        for (;;) {
            $num=readline("Enter $letter=");
            echo "\n";
            if(preg_match($pattern,$num))
            {
                return $num;
            }
            else {
                echo "Inappropriate symbols. Can only type numbers and dot\n";
            }
        }
        return $num;
    }

    $a=entercheck($a,'a');
    $b=entercheck($b,'b');
    $c=entercheck($c,'c');

    $eq->solve($a,$b,$c);
} catch (KKException $e) {
    Log::log("Error: ".$e->getMessage());
}

Log::write();
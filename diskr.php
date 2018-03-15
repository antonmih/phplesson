<?php
function diskr ($a,$b,$c) {
    $x=pow($b,2)-4*$a*$c;
    return $x;
}


function kor ($a,$b,$c) {
    $z=diskr($a,$b,$c);
    if ($z>=0) {
        $k1=(-$b+sqrt($z) )/(2*$a);
        $k1=(-$b-sqrt($z) )/(2*$a);
    echo $k1,'','ANd',$k2;
        
    }
    elseif ($z=0) {
        $k1=(-$b+1 )/(2*$a);
       return $k1;
    }
    else {
        echo 'net';
    }
    
}
var_dump ( diskr(0,0,0));
var_dump ( kor (1,3,1));
php?>
     
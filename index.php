

 

<?php
echo 'Логическое И'; ?><br><?
    
  
  
switch ($x && $y) {
    
  case $x=0 && $y=0:
    echo '0';
    
  case $x=1 && $y=0:
    echo '0';
    
    case $x=0 && $y=1:
    echo '0';
    
    case $x=1 && $y=1:
    echo '1';
    
    ?><br><?echo 'Логическое Или'; ?><br><?
   
    case $x=0 || $y=0:
    echo '0';
    
    case $x=1 || $y=0:
    echo '1';
    
    case $x=0 || $y=1:
    echo '1';
    
    case $x=1 || $y=1:
    echo '1';
    
    
    ?><br><?echo 'XOR'; ?><br><?
    case $x=0 xor $y=0:
    echo '0';
    
  
    case $x=1 xor $y=0:
    echo '1';
    
    case $x=0 xor $y=1:
    echo '1';
    
    case $x=1 xor $y=1:
    echo '0';
    break;
}

   ?><br><?echo 'Дискриминант'; ?><br><?

function Diskr($a,$b,$c) {
   $x=pow($b,2)-(-4)*($a*$c);
  if ($x>=0) {
    return $x;
  }
  else {
    echo 'Корней нет!';
  }
}
 
var_dump ( Diskr (1,1,1) );
 
assert ( Diskr(1,1,1)  == 5 );
    
  

   


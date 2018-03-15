<?php

$oper=$_GET['operator'];
$x=$_GET['x'];
$y=$_GET['y'];
var_dump($oper);

if($oper=='plus') {
    $z=$x+$y;
    echo 'Plus raven','=',$z;
}
 elseif ($oper=='minus') {
     $z=$x-$y;
     echo 'Minus ravno','=',$z;
 }
elseif ($oper=='umn') {
     $z=$x*$y;
     echo 'Umnoshenie ravno','=',$z;
 }
elseif ($oper=='del') {
     $z=$x/$y;
     echo 'Delenie ravno','=',$z;
 }

?>
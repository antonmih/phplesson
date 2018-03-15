<?php
$oper=$_GET['operator'];
$x=$_GET['x'];
$y=$_GET['y'];

?>

<form action="3lesson.php" method="get">
    <input type="number" name="x"  value="<?php echo $x; ?>">
    
  <select name="operator" >
   <option value="plus" <?= $oper == 'plus' ? 'selected' : ''?> >+</option>
   <option value="minus" <?= $oper == 'minus' ? 'selected' : ''?>>-</option>
   <option value="umn" <?= $oper == 'umn' ? 'selected' : ''?>>*</option>
   <option value="del" <?= $oper == 'del' ? 'selected' : ''?>>/</option>
</select>
    <input type="number" name="y" value="<?php echo $y; ?>">
    <input type="submit" name="Result" value="rezult"> 
    
    <?php if($oper=='plus') {
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
 }?>
    
</form>
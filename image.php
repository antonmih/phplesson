<?php
$a =[
0=>"images/1.jpg?id=0",
1=>"images/2.jpg?id=1",
2=>"images/3.jpg?id=2"
];

if (empty($_GET["id"]) ) {
$y=0;
    foreach ($a as $f) {
$y++;
      
        echo  '<a href="image.php?id='.$y.'"> <img src="'.$f.'"> </a>';
    }
}
elseif ($_GET["id"]==0) {
  echo '<img src="'.$a[0].'">';  
}
elseif ($_GET["id"]==1) {
 echo '<img src="'.$a[1].'">'; 
}
elseif ($_GET["id"]==2) {
 echo '<img src="'.$a[2].'">'; 
}
var_dump ($_GET);
?> 

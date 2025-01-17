<?php
$exclude_numbers=  [26,37,88,1111];

for ($i = 1 ; $i <= 1337 ; $i++){
   if ($i == 26 or $i == 37 or $i = 88 or $i =1111){ 
   
    unset($exclude_numbers[$i]);
 }
 
 else {
    echo"<br>$i<br\>";
 };
}
?>


   
   
